<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company_types;

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

        return view('companies.companies_type.index',[
            "title" => "Perusahaan"

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
        return view('companies.companies_type.create',[
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
        $model = new Company_types;
        $model->name = $request->jenisPerusahaan;
        $model->save();

        return redirect('company_type');
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
        return view('companies.companies_type.edit',[
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
        $model = new Company_types;
        $model->name = $request->jenisPerusahaan;
        $model->save();

        return redirect('company_type');
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
        return redirect('company_type');
    }
}
