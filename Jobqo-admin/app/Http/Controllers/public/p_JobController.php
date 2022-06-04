<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Job_categories;
use App\Models\Job_positions;
use App\Models\Salary;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class p_JobController extends Controller
{
    public function IndexJob()
    {
        $jobs = Job::paginate(10);
        // $jobs = DB::table('jobs')->paginate(10);

        return view('_PekerjaPage.pages.joblist',[
            'isLogin' => ((Auth::check()) ? "true" : "false")
        ],compact('jobs'));
    }

    public function cariJob(Request $request){
        $nameJob = $request->cari;

        $jobs = Job::where('name_job', 'LIKE', "%".$nameJob."%")->paginate(10);

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
