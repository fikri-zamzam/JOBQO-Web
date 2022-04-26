<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();

        return view('companies.companies_main.index',[
            "title" => "Perusahaan"

        ], compact('company'));
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
            "title" => "Perusahaan"

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
        $model = new Company;
        $model->name = $request->namaPerusahaan;
        $model->alamat = $request->alamat;
        $model->kode_pos = $request->kodePos;
        $model->email = $request->email;
        $model->contact = $request->contact;
        $model->izin_usaha = $request->izinUsaha;
        $model->img_logo = $request->imgLogo;
        $model->company_sector = $request->bidangPerusahaan;
        $model->company_type = $request->jenisPerusahaan;
        $model->website = $request->website;
        $model->save();

        return redirect('company');
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
            "title" => "Edit Perusahaan"
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
        $model = Company::find($id);
        $model->name = $request->namaPerusahaan;
        $model->alamat = $request->alamat;
        $model->kode_pos = $request->kodePos;
        $model->email = $request->email;
        $model->contact = $request->contact;
        $model->izin_usaha = $request->izinUsaha;
        $model->img_logo = $request->imgLogo;
        $model->company_sector = $request->bidangPerusahaan;
        $model->company_type = $request->jenisPerusahaan;
        $model->website = $request->website;
        $model->save();

        return redirect('company');
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
        return redirect('company');
    }
}
