<?php

namespace App\Http\Controllers\public;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicantProfileController extends Controller
{
    public function profile(){
        return view('_PekerjaPage.pages.profile.biodata', [
            'isLogin' => ((Auth::check()) ? "true" : "false"),
            'name' => Auth::user()->name,
            'username' => Auth::user()->username,
            'email' => Auth::user()->email,
            'gender' => Auth::user()->gender,
            'tgl_lahir' => Auth::user()->tgl_lahir,
            'alamat' => Auth::user()->alamat
        ]);
    }


    public function lihat_doc(){
            $user_cv = User::find(Auth::user()->id);
        return view('_PekerjaPage.pages.profile.upload_cv', [
            'isLogin' => ((Auth::check()) ? "true" : "false"),
            'cv_doc' => Auth::user()->cv_doc,
            'cv_name' => Auth::user()->cv_name,
            'id_user' => Auth::user()->id
        ],compact('user_cv'));
    }

    public function lamaran(){
        return view('_PekerjaPage.pages.profile.kelola_lamaran', [
            'isLogin' => ((Auth::check()) ? "true" : "false"),
        ]);
    }

    public function upload_doc($id,Request $request){

        $edit_doc = $request->validate([
            'cv_doc' => 'file|max:2048',
        ]);
        // $request->old_doc;
        User::where('id', $id)
               ->update($edit_doc);

        return redirect('applicant/document');
    }
}
