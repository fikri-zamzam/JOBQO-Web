<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HRDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $HRD = User::all();
        $HRD = User::where('roles', 'LIKE', '%HRD%')->get();
        return view('_AdminPage.users.role_hrd.index',[
            "title" => "HRD",
            "subtitle1" => "HRD",
            "subtitle2" => "List Data HRD",
        ], compact('HRD'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User();
        return view('_AdminPage.users.role_hrd.create',[
            "title" => "Tambah HRD",
            "subtitle1" => "HRD",
            "subtitle2" => "Tambah Data HRD"
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
            'name' => 'required|min:10',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|',
            'tgl_lahir' => 'date',
            'alamat' => 'required',
            'gender' => 'required',
            'img' => 'image|file|max:2048'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['roles'] = "HRD";
        // if($request->file('img')){
        //     $validatedData['img'] = $request->file('img')->store('Admin-profile');
        // }
        User::create($validatedData);
        return redirect('/admin/hrd');
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
        return view('_AdminPage.users.role_hrd.edit',[
            "title" => "Edit HRD",
            "subtitle1" => "HRD",
            "subtitle2" => "Ubah Data HRD"
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
        $HRD = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users,username,'.$HRD->id,
            'email' => 'required|unique:users,email,'.$HRD->id,
            'password' => 'required|min:5|',
            'tgl_lahir' => 'date',
            'gender' => 'required',
            'alamat' => 'required',
            'img' => 'image|file|max:2048'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $HRD->id)
               ->update($validatedData);

        return redirect('/admin/hrd');
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
        return redirect('/admin/hrd');
    }
}
