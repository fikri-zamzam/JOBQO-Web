<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_auths;
use Illuminate\Support\Facades\Auth;

class Admin_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_type = Admin_auths::all();

        return view('admins.admin_type.index',[
            "title" => "Jenis Admin",
            "subtitle1" => "Jenis Admin",
            "subtitle2" => "List Jenis Admin",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username

        ], compact('admin_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Admin_auths();
        return view('admins.admin_type.create',[
            "title" => "Tambah Jenis Admin",
            "subtitle1" => "Jenis Admin",
            "subtitle2" => "Tambah Jenis Admin",
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
        $model = new Admin_auths();
        $model->auth_type = $request->jenis_admin;
        $model->deskripsi = $request->deskripsi;
        $model->save();

        return redirect('admin_type');
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
        $model = Admin_auths::find($id);
        return view('admins.admin_type.edit',[
            "title" => "Edit Jenis Admin",
            "subtitle1" => "Jenis Admin",
            "subtitle2" => "Edit Jenis Admin",
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
        $model = Admin_auths::find($id);
        $model->auth_type = $request->jenis_admin;
        $model->deskripsi = $request->deskripsi;
        
        $model->save();

        return redirect('admin_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Admin_auths::find($id);
        $model->delete();
        return redirect('admin_type');
    }
}
