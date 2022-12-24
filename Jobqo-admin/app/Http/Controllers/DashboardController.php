<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Job;
use App\Models\Company;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexAdmin()
    {   
        $job_total = Job::where('id', '!=', NULL)->count();
        $comp_total = Company::where('id', '!=', NULL)->count();
        $applicant_total = User::where('roles', 'LIKE', '%Pekerja%')->count();
        $lamaran_total = Application::where('id', '!=', NULL)->count();
        return view('_AdminPage.dashboard.main',[
            "title" => "Dashboard",
            "subtitle1" => "Dashboard",
            "subtitle2" => "",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img,
            "job_total" => $job_total,
            "comp_total" => $comp_total,
            "applicant_total" => $applicant_total,
            "lamaran_total" => $lamaran_total,


        ]);
    }

    public function indexHRD()
    {   $user = User::find(Auth::user()->id);
        $job_total = Job::where('id', '!=', NULL)->count();
        $lamaran_total = Application::where('id', '!=', NULL)->count();



        return view('_HRDPage.dashboard.main',[
            "title" => "Dashboard",
            "subtitle1" => "Dashboard ".$user->getCompany->name_company,
            "subtitle2" => "",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile"=> Auth::user()->img,
            "company" => $user->getCompany->name_company,
            "job_total" => $job_total,
            "lamaran_total" => $lamaran_total,

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
        $job_total = Job::where('id', '!=', NULL)->count();
        $comp_total = Company::where('id', '!=', NULL)->count();
        $applicant_total = User::where('roles', 'LIKE', '%Pekerja%')->count();
        return view('_PekerjaPage.pages.homepage',[
            'isLogin' => ((Auth::check()) ? "true" : "false"),
            "fullname"  => ((Auth::check()) ? Auth::user()->name : ""),
            "imgProfile" => ((Auth::check()) ? Auth::user()->img : ""),
            "job_total" => $job_total,
            "comp_total" => $comp_total,
            "applicant_total" => $applicant_total
        ]);
    }
}
