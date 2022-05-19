<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company_types;
use Illuminate\Support\Facades\Auth;

class CompanyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_type = Company_types::all();

        return view('_AdminPage.companies.companies_type.index',[
            "title" => "Jenis Perusahaan",
            "subtitle1" => "Jenis Perusahaan",
            "subtitle2" => "List Jenis Perusahaan",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

        ], compact('company_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Company_types();
        return view('_AdminPage.companies.companies_type.create',[
            "title" => "Tambah Jenis Perusahaan",
            "subtitle1" => "Jenis Perusahaan",
            "subtitle2" => "Tambah Jenis Perusahaan",
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
            'nameType' => 'required|min:5',
            'deskripsi' => 'required|'

        ]);

        Company_types::create($validatedData);
        return redirect('admin/companies_type');
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
        $model = Company_types::find($id);
        return view('_AdminPage.companies.companies_type.edit',[
            "title" => "Edit Jenis Perusahaan",
            "subtitle1" => "Jenis Perusahaan",
            "subtitle2" => "Edit Jenis Perusahaan",
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
        $ComType = Company_types::find($id);
        $validatedData = $request->validate([
            'nameType' => 'required|min:5',
            'deskripsi' => 'required|'

        ]);

        Company_types::where('id', $ComType->id)
               ->update($validatedData);

        return redirect('admin/companies_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Company_types::find($id);
        $model->delete();
        return redirect('admin/companies_type');
    }
}
