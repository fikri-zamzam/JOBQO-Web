<?php

use Illuminate\Support\Facades\Route;

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
    return view('buku', [
        "title" => "Buku"
    ]);
});

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