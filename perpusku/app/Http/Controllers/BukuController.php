<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::latest()->paginate(10);

        return view('buku.index',[
            "title" => "Buku"

        ], compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Buku();
        return view('buku.create',[
            "title" => "Buku"

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
        $model = new Buku();

        $model->judul = $request->judulbuku;
        $model->pengarang = $request->penulisbuku;
        $model->penerbit = $request->penerbitbuku;
        $model->tahun_terbit = $request->tahunterbit;
        $model->save();

        return redirect('buku');
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
        $model = Buku::Find($id);
        return view('buku.edit',[
            "title" => "Buku"

        ], compact('model'));
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
        $model = Buku::Find($id);

        $model->judul = $request->judulbuku;
        $model->pengarang = $request->penulisbuku;
        $model->penerbit = $request->penerbitbuku;
        $model->tahun_terbit = $request->tahunterbit;
        $model->save();

        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Buku::Find($id);
        $model->delete();
        return redirect('buku');
    }
}
