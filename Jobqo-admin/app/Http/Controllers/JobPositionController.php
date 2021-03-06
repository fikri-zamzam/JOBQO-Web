<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_positions;
use Illuminate\Support\Facades\Auth;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs_position = Job_positions::all();

        return view('_AdminPage.jobs.jobs_position.index',[
            "title" => "Posisi Pekerjaan",
            "subtitle1" => "Posisi Pekerjaan",
            "subtitle2" => "List Posisi Pekerjaan",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

        ], compact('jobs_position'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Job_positions();
        return view('_AdminPage.jobs.jobs_position.create',[
            "title" => "Tambah Posisi Pekerjaan",
            "subtitle1" => "Posisi Pekerjaan",
            "subtitle2" => "Tambah Posisi Pekerjaan",
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
        $model = new Job_positions;
        $model->name = $request->namaPosition;
        $model->deskripsi = $request->deskripsi;
        $model->save();

        return redirect('admin/jobs_position')->with('success', 'Selamat! Posisi Pekerjaan Berhasil ditambah');
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
        $model = Job_positions::find($id);
        return view('_AdminPage.jobs.jobs_position.edit',[
            "title" => "Edit Posisi Pekerjaan",
            "subtitle1" => "Posisi Pekerjaan",
            "subtitle2" => "Edit Posisi Pekerjaan",
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
        $model = Job_positions::find($id);
        $model->name = $request->namaPosition;
        $model->deskripsi = $request->deskripsi;
        $model->save();

        return redirect('admin/jobs_position')->with('success', 'Selamat! Posisi Pekerjaan Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Job_positions::find($id);
        $model->delete();
        return redirect('admin/jobs_position')->with('success', 'Selamat! Posisi Pekerjaan Berhasil dihapus');
    }
}
