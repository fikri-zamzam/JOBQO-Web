<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

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

        return view('jobs.jobs_main.index',[
            "title" => "Job"

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
        return view('jobs.jobs_main.create',[
            "title" => "Job"

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
        $model = new Job;
        $model->name_job = $request->namaJob;
        $model->desk_job = $request->deskJob;
        $model->gaji = $request->gaji;
        $model->company_id = $request->companyId;
        $model->job_category_id = $request->jobCategory;
        $model->job_position_id = $request->jobPosition;
        $model->job_requirement = $request->jobReq;
        $model->save();

        return redirect('jobs');
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
        return view('jobs.jobs_main.edit',[
            "title" => "Edit Job"
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
        $model = Job::find($id);
        $model->name_job = $request->namaJob;
        $model->desk_job = $request->deskJob;
        $model->gaji = $request->gaji;
        $model->company_id = $request->companyId;
        $model->job_category_id = $request->jobCategory;
        $model->job_position_id = $request->jobPosition;
        $model->job_requirement = $request->jobReq;
        $model->save();

        return redirect('jobs');
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
