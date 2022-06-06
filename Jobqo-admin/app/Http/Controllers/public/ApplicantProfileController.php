<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicantProfileController extends Controller
{
    public function profile(){
        return view('_PekerjaPage.pages.profile');
    }
}
