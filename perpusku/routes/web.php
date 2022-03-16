<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

Route::get('/', [BooksController::class,'index']);
Route::get('/tambahBuku', [BooksController::class,'create']);

Route::get('/petugas', function () {
    return view('petugas', [
        "title" => "Petugas"
    ]);
});

Route::get('/anggota', function () {
    return view('anggota', [
        "title" => "Anggota"
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