<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexAdmin()
    {
        return view('_AdminPage.dashboard.main',[
            "title" => "Dashboard",
            "subtitle1" => "Dashboard",
            "subtitle2" => "",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
            // "imgProfile" => ""

        ]);
    }

    public function indexHRD()
    {
        return view('_HRDPage.dashboard.main',[
            "title" => "Dashboard",
            "subtitle1" => "Dashboard",
            "subtitle2" => "",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
            // "imgProfile" => ""

        ]);
    }

    public function checkDoc()
    {
        return view('_HRDPage.dashboard.confirmDoc',[
            // "title" => "Dashboard",
            // "subtitle1" => "Dashboard",
            // "subtitle2" => ""

        ]);
    }
}
