<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Company_types;
use App\Models\Company_sectors;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CheckdocHRDController extends Controller
{
    public function step_one_show(Request $request) {
        $hrd_doc = $request->session()->get('hrd_doc');
        return view('_HRDPage.dashboard.step-one',[
            "CompanySector" => Company_sectors::all(),
            "CompanyType" => Company_types::all()
        ],compact('hrd_doc'));
    }


    public function step_one_post(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users',
            'tgl_lahir' => 'date',
            'alamat' => 'required',
            'gender' => 'required',
        ]);

        $validatedData['roles'] = "HRD";

        $id = Auth::user()->id;

        if(empty($request->session()->get('hrd_doc'))){
            $hrd_doc = User::find($id);
            $hrd_doc->fill($validatedData);
            $request->session()->put('hrd_doc', $hrd_doc);
        }else{
            $hrd_doc = $request->session()->get('hrd_doc');
            $hrd_doc->fill($validatedData);
            $request->session()->put('hrd_doc', $hrd_doc);
        }


        return redirect()->route('step-two-show');
    }

    public function step_two_show() {
        return view('_HRDPage.dashboard.step-two',[
            "CompanySector" => Company_sectors::all(),
            "CompanyType" => Company_types::all()
        ]);
    }

    public function step_two_post(Request $request) {
        $validatedData = $request->validate([
            'name_company' => 'required|min:5',
            'alamat' => 'required',
            'kode_pos' => 'required|numeric|digits:6',
            'email' => 'required|min:5|unique:companies|email:dns',
            'contact' => 'required|numeric|min:12',
            'company_sector_id' => 'required',
            'company_type_id' => 'required',
            'website' => 'required',
            // 'status_izin' => 'required',
            // 'img_logo' => 'required',
            // 'company_place_id' => 'required'
        ]);

        $validatedData['users_id'] = Auth::user()->id;


        //menyimpan data perusahaan
        Company::create($validatedData);

        // menyimpan data hrd
        $hrd_doc = $request->session()->get('hrd_doc');
        $hrd_doc->save();
        $request->session()->forget('hrd_doc');

        return redirect('/hrd');
    }
}
