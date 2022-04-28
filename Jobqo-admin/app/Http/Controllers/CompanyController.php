<?php

namespace App\Http\Controllers;
use App\Models\Company_sectors;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Company_types;

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

        return view('companies.companies_main.index',[
            "title" => "Perusahaan"

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
        return view('companies.companies_main.create',[
            "title" => "Perusahaan",
            "CompanySector" => Company_sectors::all(),
            "CompanyType" => Company_types::all()

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
            'img_logo' => 'required',
            'company_place_id' => 'required'
        ]);

        Company::create($validatedData);
        return redirect('companies');
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
        return view('companies.companies_main.edit',[
            "title" => "Edit Perusahaan",
            "CompanySector" => Company_sectors::all(),
            "CompanyType" => Company_types::all()
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
            'email' => 'required|min:5|unique:companies',
            'contact' => 'required',
            'company_sector_id' => 'required',
            'company_type_id' => 'required',
            'website' => 'required',
            'status_izin' => 'required',
            'img_logo' => 'required',
            'company_place_id' => 'required'
        ]);

        Company::where('id',$comp->id)
                ->update($validatedData);

        return redirect('companies');
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
        $model->delete();
        return redirect('companies');
    }
}
