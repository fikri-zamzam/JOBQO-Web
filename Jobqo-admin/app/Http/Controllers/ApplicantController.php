<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicant = User::all();
        $applicant = User::where('roles', 'LIKE', '%Pekerja%')->get();
        return view('_AdminPage.users.role_applicant.index',[
            "title" => "Applicant",
            "subtitle1" => "Applicant",
            "subtitle2" => "List Data applicant",
        ], compact('applicant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User();
        return view('_AdminPage.users.role_applicant.create',[
            "title" => "Tambah Pelamar",
            "subtitle1" => "Applicant",
            "subtitle2" => "Tambah Data Applicant"
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
        $validatedData['roles'] = "Pekerja";
        // if($request->file('img')){
        //     $validatedData['img'] = $request->file('img')->store('Admin-profile');
        // }
        User::create($validatedData);
        return redirect('/admin/applicant');
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
        return view('_AdminPage.users.role_applicant.edit',[
            "title" => "Edit Pelamar",
            "subtitle1" => "Applicant",
            "subtitle2" => "Ubah Data Applicant"
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
        $applicant = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users,username,'.$applicant->id,
            'email' => 'required|unique:users,email,'.$applicant->id,
            'password' => 'required|min:5|',
            'tgl_lahir' => 'date',
            'gender' => 'required',
            'alamat' => 'required',
            'img' => 'image|file|max:2048'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $applicant->id)
               ->update($validatedData);

        return redirect('/admin/applicant');
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
        return redirect('/admin/applicant');
    }
}
