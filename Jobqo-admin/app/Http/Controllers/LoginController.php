<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return view('auth.login', [
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
            if(Auth::user()->roles == "Admin") {
                return redirect('/admin');
            } else if(Auth::user()->roles == "HRD") {
                return redirect('/hrd');
            }

        } else {
            return back()->with('loginError', 'Login gagal');
        }

        


        // mengirim user ke tempat dia inginkan
        // return redirect()->intended('/');
    }

    public function logout(){
        $redirect = 'private/login';
        if(Auth::user()->roles == "Pekerja"){
            $redirect = '/login';
        }
        Session::flush();
        Auth::logout();
        

        // ojo lali seleseikan ini
        return redirect($redirect);
    }

    //bisa ditambah function logout
}
