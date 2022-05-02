<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company_sectors;

class CompanySectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_sector = Company_sectors::all();

        return view('companies.companies_sector.index',[
            "title" => "Sektor Perusahaan",
            "subtitle1" => "Sektor Perusahaan",
            "subtitle2" => "List Sektor Perusahaan"

        ], compact('company_sector'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Company_sectors();
        return view('companies.companies_sector.create',[
            "title" => "Tambah Sektor Perusahaan",
            "subtitle1" => "Sektor Perusahaan",
            "subtitle2" => "Tambah Sektor Perusahaan"

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
            'nameSector' => 'required|min:10',
            'deskripsi' => 'required|'

        ]);

        Company_sectors::create($validatedData);

        return redirect('companies_sector');
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
        $model = Company_sectors::find($id);
        return view('companies.companies_sector.edit',[
            "title" => "Edit Sektor Perusahaan",
            "subtitle1" => "Sektor Perusahaan",
            "subtitle2" => "Edit Sektor Perusahaan"
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
        $ComSector = Company_sectors::find($id);

        $validatedData = $request->validate([
            'nameSector' => 'required|min:10',
            'deskripsi' => 'required|'

        ]);

        Company_sectors::where('id', $ComSector->id)
               ->update($validatedData);

        return redirect('companies_sector');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Company_sectors::find($id);
        $model->delete();
        return redirect('companies_sector');
    }
}
