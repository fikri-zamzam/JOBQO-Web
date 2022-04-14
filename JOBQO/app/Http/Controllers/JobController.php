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
        $job = Job::all();

        return view('jobs.index',[
            "title" => "Job"

        ], compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Job();
        return view('jobs.create',[
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
        $model->name = $request->namaJob;
        // $model->bidang = $request->bidangPerusahaan;
        // $model->no_telp = $request->notelpPerusahaan;
        // $model->address = $request->alamatPerusahaan;
        $model->save();

        return redirect('job');
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
        return view('jobs.edit',[
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
        $model->name = $request->namaJob;
        // $model->bidang = $request->bidangPerusahaan;
        // $model->no_telp = $request->notelpPerusahaan;
        // $model->address = $request->alamatPerusahaan;
        $model->save();

        return redirect('job');
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
        return redirect('job');
    }
}
