<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.users_main.index',[
            "title" => "User"

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
        return view('users.users_main.create',[
            "title" => "User"

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
            'tgl_lahir' => 'required|date', 
            'email' => 'required|unique:users',
            'alamat' => 'required',
            'password' => 'required|min:5|',
            'education' => 'required|min:10',
            'quote' => 'required|min:10',
            'phone' => 'required|min:10',
            'current_job' => 'required'
        ]);


        User::create($validatedData);
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
        $model = User::find($id);
        return view('users.users_main.show',[
            "title" => "Detail User Profile"
        ],compact('model'));
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
        return view('users.users_main.edit',[
            "title" => "Edit Petugas"
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
        $user = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required',
            'tgl_lahir' => 'required|date', 
            'email' => 'required',
            'alamat' => 'required',
            'password' => 'required|min:5|',
            'education' => 'required|min:10',
            'quote' => 'required|min:10',
            'phone' => 'required|min:10|numeric',
            'current_job' => 'required'
            // 'avatar' => 'dimensions:min_width=100,min_height=200'
        ]);

        User::where('id', $user->id)
               ->update($validatedData);

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

    // untuk melihat detail usser
    
}
