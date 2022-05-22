<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Company_types;
use App\Models\Company_sectors;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        $companies = Company::where('status_izin', 'LIKE', '%N%')->get();
        return view('_AdminPage.permohonan.v_company',[
            "title" => "Permohona Perusahaan",
            "subtitle1" => "Perusahaan",
            "subtitle2" => "List Data Permohonan Perusahaan",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

        ], compact('companies'));
    }

    public function Accept($id)
    {

        // status izin jadi Y
        // hrd dapet = company id
        $companies = Company::find($id);
        $companies->status_izin = "Y";
        $companies->save();
        
        $id_hrd = $companies->users_id;
        $hrd = User::find($id_hrd);
        $hrd->companies_id = $id;
        $hrd->save();
        return redirect('admin/verifycompany');
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        $model = Company::find($id);
        $model->delete();
        return redirect('admin/verifycompany');
    }


    public function indexHRD(){
        $HRD = User::all();
        $HRD = User::where('roles', 'LIKE', '%HRD%')->get();
        return view('_AdminPage.permohonan.apply_HRD',[
            "title" => "Apply HRD",
            "subtitle1" => "Apply HRD",
            "subtitle2" => "List Data Apply HRD",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
        ], compact('HRD'));
    }

    public function createHRD(){
        $model = new User();
        return view('_AdminPage.permohonan.add_apply_HRD',[
            "title" => "Apply HRD",
            "subtitle1" => "Apply HRD",
            "subtitle2" => "List Data Apply HRD",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
        ], compact('model'));
    }

    public function storeHRD(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['roles'] = "HRD";

        User::create($validatedData);
        return redirect('admin/verifyhrd');
    }
}
