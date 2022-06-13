<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
            "imgProfile" => Auth::user()->img
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
        // return $request->file('imageAdmin')->store('Admin-profile');

        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|',
            'gender' => 'required',
            'tgl_lahir' => 'date',
            'alamat' => 'required',
            'img' => 'image|file|max:2048|dimensions:max_width=500,max_height=500'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['roles'] = "Admin";

        if($request->file('img')){
            $file = $request->file('img');
            $path = 'Admin-profile';
            $filename = $path.'/'.date('YmdHi').$file->getClientOriginalName();
            $file->move('img/'.$path.'/', $filename);
            $validatedData['img'] = $filename;
        }

        User::create($validatedData);
        return redirect('/admin/admin')->with('success', 'Selamat! Data Admin berhasil Ditambah');
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
        $admin = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users,username,'.$admin->id,
            'email' => 'required|unique:users,email,'.$admin->id,
            'gender' => 'required',
            'tgl_lahir' => 'date',
            'alamat' => 'required',
            'img' => 'image|file|max:2048|dimensions:max_width=500,max_height=500'
        ]);

        if($request->file('img')){
            if($request->oldImage) {
                // menghapus file gambar lama
                unlink("img/".$request->oldImage);
            }
            $file = $request->file('img');
            $path = 'Admin-profile';
            $filename = $path.'/'.date('YmdHi').$file->getClientOriginalName();
            $file->move('img/'.$path.'/', $filename);
            $validatedData['img'] = $filename;
        }

        User::where('id', $admin->id)
               ->update($validatedData);

        return redirect('/admin/admin')->with('success', 'Selamat! Data Admin berhasil diperbarui');
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
        if($model->img != NULL) {
            unlink("img/".$model->img);
        }
        $model->delete();
        return redirect('/admin/admin')->with('success', 'Data Admin berhasil dihapus');
    }
}
