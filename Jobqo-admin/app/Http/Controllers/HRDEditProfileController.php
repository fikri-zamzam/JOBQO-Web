<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\Company_types;
use App\Models\Company_sectors;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HRDEditProfileController extends Controller
{
    public function edit_hrd($id)
    {
        $model = User::find($id);
        return view('_HRDPage.profile.edit_hrd',[
            "title" => "Edit HRD",
            "subtitle1" => "HRD",
            "subtitle2" => "Ubah Data HRD",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
        ],compact('model'));
    }

    public function post_edit_hrd(Request $request,$id)
    {
        $HRD = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users,username,'.$HRD->id,
            'email' => 'required|unique:users,email,'.$HRD->id,
            'tgl_lahir' => 'date',
            'gender' => 'required',
            'alamat' => 'required',
            'img' => 'image|file|max:2048|dimensions:max_width=500,max_height=500'
        ]);

        if($request->file('img')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['img'] = $request->file('img')->store('HRD-profile');
        }

        User::where('id', $HRD->id)
               ->update($validatedData);

        return redirect('hrd/');
    }

    public function edit_company($id)
    {
        $model = Company::find($id);
        return view('_HRDPage.profile.edit_company',[
            "title" => "Edit Perusahaan",
            "subtitle1" => "Perusahaan",
            "subtitle2" => "Ubah Data Perusahaan",
            "CompanySector" => Company_sectors::all(),
            "CompanyType" => Company_types::all(),
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
        ],compact('model'));
    }

    public function post_edit_company(Request $request,$id)
    {
        $comp = Company::find($id);
        $validatedData = $request->validate([
            'name_company' => 'required|min:5',
            'alamat' => 'required',
            'kode_pos' => 'required|max:6',
            'email' => 'required|min:5|unique:companies,email,'.$comp->id,
            'contact' => 'required',
            'company_sector_id' => 'required',
            'company_type_id' => 'required',
            'website' => 'required',
            'img_logo' => 'image|file|max:2048|dimensions:max_width=500,max_height=500',
        ]);

        if($request->file('img_logo')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['img_logo'] = $request->file('img_logo')->store('Company-logo');
        }

        Company::where('id',$comp->id)
                ->update($validatedData);

        return redirect('hrd/');
    }
}
