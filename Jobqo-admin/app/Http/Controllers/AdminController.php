<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::all();
        $admin = User::where('roles', 'LIKE', '%Admin%')->get();
        return view('_AdminPage.admins.admin_main.index',[
            "title" => "Admin",
            "subtitle1" => "Admin",
            "subtitle2" => "List Data Admin",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
        ], compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User();
        return view('_AdminPage.admins.admin_main.create',[
            "title" => "Tambah Admin",
            "subtitle1" => "Admin",
            "subtitle2" => "Tambah Data Admin",
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
            'gender' => 'required',
            'tgl_lahir' => 'date',
            'alamat' => 'required',
            'img' => 'image|file|max:2048'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['roles'] = "Admin";
        if($request->file('img')){
            $validatedData['img'] = $request->file('img')->store('Admin-profile');
        }
        User::create($validatedData);
        return redirect('/admin/admin');
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
        $model = User::find($id);
        return view('_AdminPage.admins.admin_main.edit',[
            "title" => "Edit Admin",
            "subtitle1" => "Admin",
            "subtitle2" => "Ubah Data Admin",
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
        $admin = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users,username,'.$admin->id,
            'email' => 'required|unique:users,email,'.$admin->id,
            'password' => 'required|min:5|',
            'gender' => 'required',
            'tgl_lahir' => 'date',
            'alamat' => 'required',
            'img' => 'image|file|max:2048'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $admin->id)
               ->update($validatedData);

        return redirect('/admin/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = User::find($id);
        $model->delete();
        return redirect('/admin/admin');
    }
}
