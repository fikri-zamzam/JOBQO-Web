<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
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
            "subtitle2" => "Tambah Data Applicant",
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
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|',
            'tgl_lahir' => 'date',
            'alamat' => 'required',
            'gender' => 'required',
            'img' => 'image|file|max:2048|dimensions:max_width=500,max_height=500',
            'cv_doc' => 'file|max:2048',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['roles'] = "Pekerja";
        if($request->file('img')){
            $validatedData['img'] = $request->file('img')->store('Applicant-profile');
        }

        if($request->file('cv_doc')){
            $validatedData['cv_doc'] = $request->file('cv_doc')->store('Applicant-document');
            $validatedData['cv_name'] = $request->file('cv_doc')->getClientOriginalName();
        }
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
            "subtitle2" => "Ubah Data Applicant",
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
        $applicant = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users,username,'.$applicant->id,
            'email' => 'required|unique:users,email,'.$applicant->id,
            'password' => '',
            'tgl_lahir' => 'date',
            'gender' => 'required',
            'alamat' => 'required',
            'img' => 'image|file|max:2048|dimensions:max_width=500,max_height=500',
            'cv_doc' => 'file|max:2048',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        if($request->file('img')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['img'] = $request->file('img')->store('Applicant-profile');
        }

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
        if($model->img) {
            Storage::delete($model->img);
        }
        $model->delete();
        return redirect('/admin/applicant');
    }
}
