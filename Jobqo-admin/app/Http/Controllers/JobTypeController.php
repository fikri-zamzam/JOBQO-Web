<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_categories;
use Illuminate\Support\Facades\Auth;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs_type = Job_categories::all();

        return view('_AdminPage.jobs.jobs_type.index',[
            "title" => "Jenis Pekerjaan",
            "subtitle1" => "Jenis Pekerjaan",
            "subtitle2" => "List Jenis Pekerjaan",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username

        ], compact('jobs_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Job_categories();
        return view('_AdminPage.jobs.jobs_type.create',[
            "title" => "Tambah Jenis Pekerjaan",
            "subtitle1" => "Jenis Pekerjaan",
            "subtitle2" => "Tambah Jenis Pekerjaan",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username

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
        $model = new Job_categories;
        $model->name = $request->namaCategories;
        $model->deskripsi = $request->deskripsi;
        $model->save();

        return redirect('admin/jobs_type');
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
        $model = Job_categories::find($id);
        return view('_AdminPage.jobs.jobs_type.edit',[
            "title" => "Edit Jenis Pekerjaan",
            "subtitle1" => "Jenis Pekerjaan",
            "subtitle2" => "Edit Jenis Pekerjaan",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username
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
        $model = Job_categories::find($id);
        $model->name = $request->namaCategories;
        $model->deskripsi = $request->deskripsi;
        $model->save();

        return redirect('admin/jobs_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Job_categories::find($id);
        $model->delete();
        return redirect('admin/jobs_type');
    }
}
