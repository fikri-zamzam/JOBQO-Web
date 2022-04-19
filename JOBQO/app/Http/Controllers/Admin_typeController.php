<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_type;

class Admin_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_type = Admin_type::all();

        return view('admin_type.index',[
            "title" => "Admin"

        ], compact('admin_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Admin_type();
        return view('admin_type.create',[
            "title" => "Admin"

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
        $model = Admin_type::find($id);
        $model->id = $request->$id;
        $model->jenis_admin = $request->jenis_admin;
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
        $model = Admin_type::find($id);
        return view('admin_type.edit',[
            "title" => "Edit Jenis Admin"
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
        $model = Admin_type::find($id);
        $model->id = $request->$id;
        $model->jenis_admin = $request->jenis_admin;
        
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
        $model = Admin_type::find($id);
        $model->delete();
        return redirect('admin_type');
    }
}
