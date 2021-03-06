<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Company_types;
use App\Models\Company_sectors;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return view('_AdminPage.companies.companies_main.index',[
            "title" => "Perusahaan",
            "subtitle1" => "Perusahaan",
            "subtitle2" => "List Data Perusahaan",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

        ], compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Company();
        return view('_AdminPage.companies.companies_main.create',[
            "title" => "Tambah Perusahaan",
            "subtitle1" => "Perusahaan",
            "subtitle2" => "Tambah Data Perusahaan",
            "CompanySector" => Company_sectors::all(),
            "CompanyType" => Company_types::all(),
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

        ], compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_company' => 'required|min:5',
            'alamat' => 'required',
            'kode_pos' => 'required|max:6',
            'email' => 'required|min:5|unique:companies',
            'contact' => 'required',
            'company_sector_id' => 'required',
            'company_type_id' => 'required',
            'website' => 'required',
            'status_izin' => 'required',
            'img_logo' => 'image|file|max:2048|dimensions:max_width=500,max_height=500'
        ]);

        if($request->file('img_logo')){
            $file = $request->file('img_logo');
            $path = 'Company-logo';
            $filename = $path.'/'.date('YmdHi').$file->getClientOriginalName();
            $file->move('img/'.$path.'/', $filename);
            $validatedData['img_logo'] = $filename;
        }

        Company::create($validatedData);
        return redirect('admin/companies')->with('success', 'Data Perusahaan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Company::find($id);
        return view('_AdminPage.companies.companies_main.edit',[
            "title" => "Edit Perusahaan",
            "subtitle1" => "Perusahaan",
            "subtitle2" => "Ubah Data Perusahaan",
            "CompanySector" => Company_sectors::all(),
            "CompanyType" => Company_types::all(),
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
        ],compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comp = Company::find($id);
        $validatedData = $request->validate([
            'name_company' => 'required|min:5',
            'alamat' => 'required',
            'kode_pos' => 'required|max:6',
            'email' => 'required|min:5|unique:companies,email,'.$comp->id,
            'contact' => 'required',
            'company_sector_id' => 'required',
            'company_type_id' => 'required',
            'website' => 'required',
            'status_izin' => 'required',
            'img_logo' => 'image|file|max:2048|dimensions:max_width=500,max_height=500',
        ]);

        if($request->file('img_logo')){
            if($request->oldImage != NULL) {
                // menghapus file gambar lama
                unlink("img/".$request->oldImage);
            }
            $file = $request->file('img_logo');
            $path = 'Company-logo';
            $filename = $path.'/'.date('YmdHi').$file->getClientOriginalName();
            $file->move('img/'.$path.'/', $filename);
            $validatedData['img_logo'] = $filename;
        }

        Company::where('id',$comp->id)
                ->update($validatedData);

        return redirect('admin/companies')->with('success', 'Data Perusahaan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Company::find($id);
        if($model->img != NULL) {
            unlink("img/".$model->img);
        }
        $model->delete();
        DB::delete('DELETE from jobs WHERE company_id = ?', [$model->id]);
        DB::delete('DELETE from salaries WHERE company_id = ?', [$model->id]);
        DB::delete('DELETE from applications WHERE company_id = ?', [$model->id]);
        return redirect('admin/companies')->with('success', 'Data Perusahaan berhasil dihapus');
    }
}
