<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserBlacklistController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobTypeController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanySectorController;
use App\Http\Controllers\CompanyTypeController;
use App\Http\Controllers\Admin_typeController;
use App\Http\Controllers\TugasController;

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
    return view('layouts.main', [
        "title" => "Dashboard"
    ]);
});





Route::resource('users', UserController::class);
Route::resource('users_blacklist', UserBlacklistController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [DashboardController::class, 'index']);
Route::resource('admin', AdminController::class);
Route::resource('jobs', JobController::class);
Route::resource('jobs_type', JobTypeController::class);
Route::resource('jobs_position', JobPositionController::class);
Route::resource('companies', CompanyController::class);
Route::resource('companies_sector', CompanySectorController::class);
Route::resource('companies_type', CompanyTypeController::class);
// Berfungsi untuk mencegah orang lain untuk mengakses fungsi show yang tidak diperlukan
Route::resource('admin_type', Admin_typeController::class)->except('show');

//Controller untuk membenahi tampilan
Route::get('/tugas2',[TugasController::class, 'kedua']);