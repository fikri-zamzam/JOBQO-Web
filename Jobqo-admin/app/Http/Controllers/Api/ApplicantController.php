<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $applicant = User::all();
        $applicant = User::where('roles', 'LIKE', '%Pekerja%')->get();
        return $applicant;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:32'],
            'username' => ['required'],
            'email' => ['required', 'email', 'max:64', 'unique:users,email'],
            'password' => ['required']
        ]);
 
        if ($validator->fails()) {
            return response()
                ->json([
                    'error' => true,
                    'validations' => $validator->errors()
                ], 422);
        }
 
        $applicant = new User();
        $applicant->name = $request->name;
        $applicant->username = $request->username;
        $applicant->email = $request->email;
        $applicant->password = Hash::make($request->password);
        $applicant->save();
 
        return response()
            ->json([
                'success' => true,
                'data' => $applicant
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $applicant)
    {
        return $applicant;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $applicant = User::find($id);
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:32'],
            'username' => ['required'],
            'email' => ['required', 'email', 'max:64', 'unique:users,email'],
            'password' => ['required']
        ]);
 
        if ($validator->fails()) {
            return response()
                ->json([
                    'error' => true,
                    'validations' => $validator->errors()
                ], 422);
        }
 
        $applicant->name = $request->name;
        $applicant->username = $request->username;
        $applicant->email = $request->email;
        $applicant->password = Hash::make($request->password);
        $applicant->save();
 
        return response()
            ->json([
                'success' => true,
                'data' => $applicant
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = User::find($id);
        if($model->img) {
            Storage::delete($model->img);
        }
        $model->delete();
 
        return response()
            ->json([
                'success' => true
            ]);
    }
}
