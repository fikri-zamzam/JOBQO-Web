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
            $file = $request->file('img');
            $path = 'Applicant-profile';
            $filename = $path.'/'.date('YmdHi').$file->getClientOriginalName();
            $file->move('img/'.$path.'/', $filename);
            $validatedData['img'] = $filename;
        }

        if($request->file('cv_doc')){
            $file = $request->file('cv_doc');
            $path = 'Applicant-documents';
            $filename = $path.'/'.date('YmdHi').$file->getClientOriginalName();
            $file->move('document/'.$path.'/', $filename);
            $validatedData['cv_doc'] = $filename;
            $validatedData['cv_name'] = $request->file('cv_doc')->getClientOriginalName();
        }

        User::create($validatedData);
        return redirect('/admin/applicant')->with('success', 'Selamat! Data Applicant berhasil Ditambah');
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
                // menghapus file gambar lama
                unlink("img/".$request->oldImage);
            }
            $file = $request->file('img');
            $path = 'Applicant-profile';
            $filename = $path.'/'.date('YmdHi').$file->getClientOriginalName();
            $file->move('img/'.$path.'/', $filename);
            $validatedData['img'] = $filename;
        }

        if($request->file('cv_doc')){
            if($request->oldDoc) {
                // menghapus file document lama
                unlink("document/".$request->oldDoc);
            }
            $file = $request->file('cv_doc');
            $path = 'Applicant-documents';
            $filename = $path.'/'.date('YmdHi').$file->getClientOriginalName();
            $file->move('document/'.$path.'/', $filename);
            $validatedData['cv_doc'] = $filename;
            $validatedData['cv_name'] = $request->file('cv_doc')->getClientOriginalName();
        }

        User::where('id', $applicant->id)
               ->update($validatedData);

        return redirect('/admin/applicant')->with('success', 'Selamat! Data Applicant berhasil Diubah');
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

        if($model->cv_doc != NULL) {
            unlink("document/".$model->cv_doc);
        }

        $model->delete();
        return redirect('/admin/applicant')->with('success', 'Selamat! Data Applicant berhasil Dihapus');
    }
}
