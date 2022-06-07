<?php

namespace App\Http\Controllers\public;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicantProfileController extends Controller
{
    public function profile(){
        return view('_PekerjaPage.pages.profile.biodata', [
            'isLogin' => ((Auth::check()) ? "true" : "false"),
        ]);
    }


    public function cv_doc(){
        return view('_PekerjaPage.pages.profile.upload_cv', [
            'isLogin' => ((Auth::check()) ? "true" : "false"),
        ]);
    }

    public function lamaran(){
        return view('_PekerjaPage.pages.profile.kelola_lamaran', [
            'isLogin' => ((Auth::check()) ? "true" : "false"),
        ]);
    }

    // public function upload_doc(){
    //     return view('_PekerjaPage.pages.profile.biodata', [
    //         'isLogin' => ((Auth::check()) ? "true" : "false"),
    //     ]);
    // }
}
