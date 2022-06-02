<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Job_categories;
use App\Models\Job_positions;
use App\Models\Salary;
use Illuminate\Support\Facades\Auth;

class p_JobController extends Controller
{
    public function IndexJob()
    {
        $jobs = Job::all();
        return view('_PekerjaPage.pages.joblist',[
            'isLogin' => ((Auth::check()) ? "true" : "false")
        ],compact('jobs'));
    }

    public function DetailJobs($id){
        $model = Job::find($id);
        return view('_PekerjaPage.pages.jobdetail',[
            'isLogin' => ((Auth::check()) ? "true" : "false")
        ],compact('model'));
         
    }
}
