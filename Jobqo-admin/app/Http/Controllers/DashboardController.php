<?php

namespace App\Http\Controllers;
use App\Models\User;
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
    {   $user = User::find(Auth::user()->id);
        return view('_HRDPage.dashboard.main',[
            "title" => "Dashboard",
            "subtitle1" => "Dashboard ".$user->getCompany->name_company,
            "subtitle2" => "",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile"=> Auth::user()->img,
            "company" => $user->getCompany->name_company

        ]);
    }

    public function indexApplicant()
    {   $user = User::find(Auth::user()->id);
        return view('_HRDPage.dashboard.main',[
            "title" => "Dashboard",
            "subtitle1" => "Dashboard",
            "subtitle2" => "",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile"=> Auth::user()->img,
            "company" => $user->getCompany->name_company

        ]);
    }

    public function waitingRoom(){
        return view('_HRDPage.dashboard.waiting_room');
    }

    public function HomePublic(){
        return view('_PekerjaPage.pages.homepage',[
            'isLogin' => ((Auth::check()) ? "true" : "false"),
            "fullname"  => ((Auth::check()) ? Auth::user()->name : ""),
            "imgProfile" => ((Auth::check()) ? Auth::user()->img : ""),
        ]);
    }
}
