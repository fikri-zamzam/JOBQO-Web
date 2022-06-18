<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HRD_Application extends Controller
{
    public function lamaran_hrd(){
        $lamaran = Application::all();

        return view('_HRDPage.lamaran.index',[
            "title" => "Kelola Lamaran",
            "subtitle1" => "Lamaran",
            "subtitle2" => "List Data Lamaran",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
        ], compact('lamaran'));
    }
}
