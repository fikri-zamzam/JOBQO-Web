<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Job_categories;
use App\Models\Job_positions;
use App\Models\Salary;
use Illuminate\Support\Facades\Auth;

class HRD_JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        $jobs = Job::where('company_id',Auth::user()->companies_id)->get();

        return view('_HRDPage.jobs.index',[
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
        return view('_HRDPage.jobs.create',[
            "title" => "Tambah Pekerjaan",
            "subtitle1" => "Pekerjaan",
            "subtitle2" => "Tambah Data Pekerjaan",
            "Categories" => Job_categories::all(),
            "Positions" => Job_positions::all(),
            "Salary"    => Salary::where('companies_id',Auth::user()->companies_id)->get(),
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
            'salaries_id' => 'required',
            'company_id' => '',
            'job_category_id' => 'required',
            'job_position_id' => 'required',
            'job_requirement' => 'required'
        ]);

        $validatedData["company_id"] = Auth::user()->companies_id;

        Job::create($validatedData);
        return redirect('hrd/jobs');
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
        return view('_HRDPage.jobs.edit',[
            "title" => "Edit Pekerjaan",
            "subtitle1" => "Pekerjaan sd",
            "subtitle2" => "Ubah Data Pekerjaan",
            "Categories" => Job_categories::all(),
            "Positions" => Job_positions::all(),
            "Salary"    => Salary::where('companies_id',Auth::user()->companies_id)->get(),
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
            'salaries_id' => 'required',
            'job_category_id' => 'required',
            'job_position_id' => 'required',
            'job_requirement' => 'required'
        ]);
        Job::where('id',$job->id)
             ->update($validatedData);

        return redirect('hrd/jobs');
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
        return redirect('hrd/jobs');
    }
}
