<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HRD_Application extends Controller
{
    public function index(){
        $lamaran = Application::all();

        return view('_HRDPage.lamaran.index',[
            "title" => "Pekerjaan",
            "subtitle1" => "Pekerjaan",
            "subtitle2" => "List Data Pekerjaan",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

        ], compact('lamaran'));
    }
}
