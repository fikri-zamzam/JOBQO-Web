<?php

namespace App\Http\Controllers\public_site;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function lamarPage(){
        return view('_PekerjaPage.pages.lamar_job',[
            'doc' => Auth::user()->cv_name,
        ]);
    }

    public function lamarPost(Request $request){
        $validatedData = $request->validate([
            'resume' => 'required',
        ]);
        $validatedData["users_id"] = Auth::user()->id;
        $data_id = session()->get('data_id');

        $validatedData["jobs_id"] = $data_id["id_job"];
        $validatedData["companies_id"] = $data_id["id_comp"];
        session()->forget('data_id');

        Application::create($validatedData);
        return redirect('/');
    }
}
