<?php

namespace App\Http\Controllers\public;

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
        $validatedData["jobs_id"] = session()->get('id_job');
        session()->forget('id_job');

        Application::create($validatedData);
        return redirect('/');
    }
}
