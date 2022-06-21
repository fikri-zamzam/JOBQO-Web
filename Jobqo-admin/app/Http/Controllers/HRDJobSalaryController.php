<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use Illuminate\Support\Facades\Auth;

class HRDJobSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaji = Salary::all();
        $gaji = Salary::where('companies_id',Auth::user()->companies_id)->get();

        return view('_HRDPage.jobs_salary.index',[
            "title" => "Range Gaji",
            "subtitle1" => "Range Gaji",
            "subtitle2" => "List Range Gaji",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

        ], compact('gaji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Salary();
        return view('_HRDPage.jobs_salary.create',[
            "title" => "Tambah Range Gaji",
            "subtitle1" => "Range Gaji",
            "subtitle2" => "Tambah Range Gaji",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img

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
        $validatedData = $request->validate([
            'g_awal' => 'required',
            'g_akhir' => 'required',
            'deskripsi' => 'required'
        ]);

        $validatedData["companies_id"] = Auth::user()->companies_id;

        $gaji1 =  $this->rupiah($validatedData["g_awal"]);
        $gaji2 =  $this->rupiah($validatedData["g_akhir"]);

        $validatedData["rupiah"] = $gaji1." - ".$gaji2;

        Salary::create($validatedData);
        return redirect('hrd/jobs_salary')->with('success', 'Selamat! Range gaji baru Berhasil ditambah');

        
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
        $model = Salary::find($id);
        return view('_HRDPage.jobs_salary.edit',[
            "title" => "Edit Range Gaji",
            "subtitle1" => "Range Gaji",
            "subtitle2" => "Edit Range Gaji",
            "fullname"  => Auth::user()->name,
            "username"  => Auth::user()->username,
            "imgProfile" => Auth::user()->img
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
        $gaji = Salary::find($id);
        $validatedData = $request->validate([
            'g_awal' => 'required',
            'g_akhir' => 'required',
            'deskripsi' => 'required'
        ]);

        $gaji1 =  $this->rupiah($validatedData["g_awal"]);
        $gaji2 =  $this->rupiah($validatedData["g_akhir"]);

        $validatedData["rupiah"] = $gaji1." - ".$gaji2;

        Salary::where('id',$gaji->id)
             ->update($validatedData);
        return redirect('hrd/jobs_salary')->with('success', 'Selamat! data Range gaji Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Salary::find($id);
        $model->delete();
        return redirect('hrd/jobs_salary')->with('success', 'Selamat! data Range gaji Berhasil dihapus');
    }

    public function rupiah($angka){
        $format_rupiah = "Rp ".$angka.",00";
        return $format_rupiah;
    }
}
