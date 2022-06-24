<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HRD_Application extends Controller
{
    public function lamaran_hrd(){
        $lamaran = Application::where('companies_id',Auth::user()->companies_id)->get();

//         SELECT * FROM applications
// WHERE companies_id=1 AND (status='Menunggu diproses' OR status='Sedang diproses');

        return view('_HRDPage.lamaran.index',[
            "title" => "Kelola Lamaran",
            "subtitle1" => "Lamaran",
            "subtitle2" => "List Data Lamaran",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
        ], compact('lamaran'));
    }

    public function aksi_lamaran_hrd($id,$aksi){
        $lamaran = Application::find($id);
        if($aksi == "terima"){
            $lamaran->status = 'Melanjutkan ke seleksi';
            $lamaran->save();
            return redirect('/hrd/lamaran')->with('success', 'Selamat, Anda berhasil menerima Applicant');
        } else if($aksi == "tinjau"){
            $lamaran->status = 'Sedang diproses';
            $lamaran->save();
            return redirect('/hrd/lamaran');
        } else if($aksi == "tolak"){
            $lamaran->status = 'Ditolak';
            $lamaran->save();
            return redirect('/hrd/lamaran')->with('success', 'Lamaran Applicant berhasil ditolak');
        }
    }
}
