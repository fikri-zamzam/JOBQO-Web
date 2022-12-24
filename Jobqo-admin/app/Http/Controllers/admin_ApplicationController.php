<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class admin_ApplicationController extends Controller
{
    public function index(){
        $lamaran = Application::all();

        return view('_AdminPage.lamaran.index',[
            "title" => "Pantau Lamaran",
            "subtitle1" => "Lamaran",
            "subtitle2" => "List Data Lamaran",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

        ], compact('lamaran'));
    }
}
