<?php

namespace App\Http\Controllers\public_site;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginRegisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('_PekerjaPage.pages.login', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(Auth::user()->roles == "Pekerja") {
                return redirect('applicant/profile');
            } 
            else {
                Session::flush();
                Auth::logout();
                return back()->with('loginError', 'Login error pastikan Password dan email benar');
            }

        } else {
            Session::flush();
                Auth::logout();
            return back()->with('loginError', 'Login error pastikan password dan email benar');
        }

    }

    //Login HRD

    // Register Applicant
    public function registerPage(){
        return view('_PekerjaPage.pages.register', [
            "title" => "Register"
        ]);
    }

    public function registerPost(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['roles'] = "Pekerja";

        User::create($validatedData);

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(Auth::user()->roles == "Pekerja") {
                return redirect('/');
            }

        } else {
            return back()->with('loginError', 'Login gagal');
        }
    }


}
