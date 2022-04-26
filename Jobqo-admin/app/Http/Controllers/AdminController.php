<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Admin_auths;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();

        return view('admins.admin_main.index',[
            "title" => "Admin",

        ], compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Admin();
        return view('admins.admin_main.create',[
            "title" => "Admin",
            "Admin_auths" => Admin_auths::all()
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
        // return $request->file('imageAdmin')->store('Admin-profile');

        // $model = new Admin;
        // $model->name = $request->namaAdmin;
        // $model->username = $request->userName;
        // $model->gender = $request->genderAdmin;
        // $model->email = $request->emailAdmin;
        // $model->password = $request->passAdmin;
        // $model->admin_auths_id = $request->jenisAdmin;
        // $model->save();
        

        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:admins',
            'email' => 'required|unique:admins',
            'password' => 'required|min:5|',
            'admin_auths_id' => 'required',
            'img' => 'image|file|max:2048'
        ]);

        if($request->file('img')){
            $validatedData['img'] = $request->file('img')->store('Admin-profile');
        }

        Admin::create($validatedData);
        return redirect('admin');
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
        $model = Admin::find($id);
        return view('admins.admin_main.edit',[
            "title" => "Edit Admin",
            "Admin_auths" => Admin_auths::all()
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
        $admin = Admin::find($id);
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:admins',
            'email' => 'required|unique:admins',
            'password' => 'required|min:5|',
            'admin_auths_id' => 'required',
            'img' => 'image|file|max:2048'
        ]);

        Admin::where('id', $admin->id)
               ->update($validatedData);

        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Admin::find($id);
        $model->delete();
        return redirect('admin');
    }
}
