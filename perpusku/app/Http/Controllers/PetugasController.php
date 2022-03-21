<?php

namespace App\Http\Controllers;
use App\Models\Petugas;
use Illuminate\Http\Request;


class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::latest()->paginate(10);

        return view('petugas.index',[
            "title" => "petugas"

        ], compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new petugas;
        return view('petugas.create',[
            "title" => "Tambah Petugas"
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
        $model = new Petugas;
        $model->nama_petugas = $request->nama;
        $model->jabatan = $request->jabatan;
        $model->no_hp = $request->hp;
        $model->alamat_petugas = $request->alamat;
        $model->save();

        return redirect('petugas');

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
        $model = Petugas::find($id);
        return view('petugas.edit',[
            "title" => "Edit Petugas"
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
        $model = Petugas::find($id);
        $model->nama_petugas = $request->nama;
        $model->jabatan = $request->jabatan;
        $model->no_hp = $request->hp;
        $model->alamat_petugas = $request->alamat;
        $model->save();

        return redirect('petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Petugas::find($id);
        $model->delete();
        return redirect('petugas');
    }
}
