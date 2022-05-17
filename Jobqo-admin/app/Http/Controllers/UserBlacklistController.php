<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserBlacklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.users_blacklist.index',[
            "title" => "User",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username

        ], compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User();
        return view('users.users_blacklist.create',[
            "title" => "User",
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
        $model = new User;
        $model->name = $request->namaUser;
        $model->username = $request->userName;
        $model->gender = $request->genderUser;
        $model->email = $request->emailUser;
        $model->password = $request->passUser;
        $model->save();

        return redirect('users');
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
        return view('users.users_blacklist.edit',[
            "title" => "Edit Petugas",
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
        $model = User::find($id);
        $model->name = $request->namaUser;
        $model->username = $request->userName;
        $model->gender = $request->genderUser;
        $model->email = $request->emailUser;
        $model->password = $request->passUser;
        $model->save();

        return redirect('users');
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
        return redirect('users');
    }
}
