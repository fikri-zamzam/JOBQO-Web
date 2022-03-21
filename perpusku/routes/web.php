<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('utama', [
        "title" => "Homepage"
    ]);
});

// Route::get('/', function(){
//     return view('halaman');
// });

// Route::get('/petugas', function () {
//     return view('petugas', [
//         "title" => "Petugas"
//     ]);
// });

// Route::get('/petugas', [PetugasController::class,'index']);

// Route::get('/buku', function () {
//     return view('buku', [
//         "title" => "Buku"
//     ]);
// });  

Route::resource('buku', BukuController::class);

Route::resource('petugas', PetugasController::class);
// Route get => pegawai => index
// Route get => pegawai/create => create
// Route post => pegawai => store
// Route get => pegawai/{id} => show
// Route put/patch => pegawai/{id} => update
// Route delete => pegawai/{id} => delete
// Route get => pegawai/{id}/edit => edit

Route::get('/anggota', function () {
    return view('anggota', [
        "title" => "Anggota"
    ]);
});    

Route::get('/tambahbuku', function () {
    return view('tambahbuku', [
        "title" => "Tambah Buku"
    ]);
});

Route::get('/tambahanggota', function () {
    return view('tambahanggota', [
        "title" => "Tambah Anggota"
    ]);
});

Route::get('/tambahpetugas', function () {
    return view('tambahpetugas', [
        "title" => "Tambah Petugas"
    ]);
});