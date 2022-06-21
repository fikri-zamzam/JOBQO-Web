<?php

namespace App\Http\Controllers\public_site;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Application;
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
            'alamat' => Auth::user()->alamat,
            'see' => ''
        ]);
    }

    public function edit_profile(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users,username,'.Auth::user()->id,
            'email' => 'required|unique:users,email,'.Auth::user()->id,
            'tgl_lahir' => 'date',
            'alamat' => 'required',
            'gender' => 'required',
        ]);


        User::where('id', Auth::user()->id)
               ->update($validatedData);
        
               return redirect('applicant/profile')->with('success', 'Selamat! Data anda berhasil Diperbarui');
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
        $lamaran = Application::where('users_id', Auth::user()->id)->get();
        return view('_PekerjaPage.pages.profile.kelola_lamaran', [
            'isLogin' => ((Auth::check()) ? "true" : "false"),
        ],compact('lamaran'));
    }

    public function lamaran_del($id) {
        $model = Application::find($id);
        $model->delete();
        return redirect('/applicant/lamaran')->with('success', 'Lamaran anda berhasil dibatalkan');
    }

    public function upload_doc($id,Request $request){

        $edit_doc = $request->validate([
            'cv_doc' => 'required|file|max:2048',
        ]);
        // $request->old_doc;

        if($request->file('cv_doc')){
            if($request->oldDoc != NULL) {
                // menghapus file document lama
                unlink("document/".$request->oldDoc);
            }
            $file = $request->file('cv_doc');
            $path = 'Applicant-documents';
            $filename = $path.'/'.date('YmdHi').$file->getClientOriginalName();
            $file->move('document/'.$path.'/', $filename);
            
            $edit_doc['cv_doc'] = $filename;
            $edit_doc['cv_name'] = $request->file('cv_doc')->getClientOriginalName();
        }

        User::where('id', $id)
               ->update($edit_doc);

        return redirect('applicant/document')->with('success', 'CV Dokumen berhasil diperbarui');
    }
}
