<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PublicLoginController extends Controller
{
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

            if(Auth::user()->roles == "HRD") {
                return redirect()->intended('/hrd');
            } else if(Auth::user()->roles == "Pekerja") {
                return redirect()->intended('/Pekerja');
            }

        } else {
            return back()->with('loginError', 'Login gagal');
        }

        


        // mengirim user ke tempat dia inginkan
        // return redirect()->intended('/');
    }

    // public function logout(){
    //     Session::flush();
        
    //     Auth::logout();

    //     return redirect('login');
    // }

    public function register(){
        return view('_PekerjaPage.pages.register');
    }
    public function testHalaman(){
        return view('_PekerjaPage.pages.register');
    }
}
