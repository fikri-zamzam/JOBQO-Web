<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Job_categories;
use App\Models\Job_positions;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $jobs = Job::all();

        return view('_AdminPage.jobs.jobs_main.index',[
            "title" => "Pekerjaan",
            "subtitle1" => "Pekerjaan",
            "subtitle2" => "List Data Pekerjaan",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

        ], compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Job();
        return view('_AdminPage.jobs.jobs_main.create',[
            "title" => "Tambah Pekerjaan",
            "subtitle1" => "Pekerjaan",
            "subtitle2" => "Tambah Data Pekerjaan",
            "Categories" => Job_categories::all(),
            "Positions" => Job_positions::all(),
            "Companies" => Company::all(),
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

        ], compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_job' => 'required|min:5',
            'desk_job' => 'required',
            'gaji' => 'required',
            'company_id' => 'required',
            'job_category_id' => 'required',
            'job_position_id' => 'required',
            'job_requirement' => 'required'
        ]);

        Job::create($validatedData);
        return redirect('admin/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Job::find($id);
        return view('_AdminPage.jobs.jobs_main.edit',[
            "title" => "Edit Pekerjaan",
            "subtitle1" => "Pekerjaan",
            "subtitle2" => "Ubah Data Pekerjaan",
            "Categories" => Job_categories::all(),
            "Positions" => Job_positions::all(),
            "Companies" => Company::all(),
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
        ],compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $validatedData = $request->validate([
            'name_job' => 'required|min:5',
            'desk_job' => 'required',
            'gaji' => 'required',
            'company_id' => 'required',
            'job_category_id' => 'required',
            'job_position_id' => 'required',
            'job_requirement' => 'required'
        ]);
        Job::where('id',$job->id)
             ->update($validatedData);

        return redirect('admin/jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Job::find($id);
        $model->delete();
        return redirect('jobs');
    }
}
