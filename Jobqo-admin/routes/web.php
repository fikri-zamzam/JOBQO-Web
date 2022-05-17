<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRDController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobTypeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Admin_typeController;
use App\Http\Controllers\CheckdocHRDController;
use App\Http\Controllers\CompanyTypeController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\CompanySectorController;
use App\Http\Controllers\UserBlacklistController;

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

// Route::get('/', function () {
//     return view('layouts.main', [
//         "title" => "Dashboard"
//     ]);
// });





// 
// Route::resource('users_blacklist', UserBlacklistController::class);
// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);

// // Berfungsi untuk mencegah orang lain untuk mengakses fungsi show yang tidak diperlukan
// Route::resource('admin_type', Admin_typeController::class)->except('show');

// //Controller untuk membenahi tampilan
// Route::get('/tugas2',[TugasController::class, 'kedua']);

// login admin 


// Auth::routes();

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


// Route untuk role admin

Route::group(['prefix' => 'admin','middleware' => ['auth'],['checkRole:Admin']], function() {
    Route::get('/', [DashboardController::class,'indexAdmin']);
    Route::resource('jobs', JobController::class);
        Route::resource('jobs_type', JobTypeController::class);
        Route::resource('jobs_position', JobPositionController::class);
    Route::resource('companies', CompanyController::class);
        Route::resource('companies_sector', CompanySectorController::class);
        Route::resource('companies_type', CompanyTypeController::class);
    // route untuk user
    Route::resource('applicant', ApplicantController::class);
    Route::resource('hrd', HRDController::class);
    Route::resource('admin', AdminController::class);
    // Route::resource('users', UserController::class);
 });

 Route::group(['prefix' => 'hrd','middleware' => ['auth'],['checkRole:HRD']], function() {
    Route::get('/', [DashboardController::class,'indexHRD']);
        // multi step form hrd
        Route::get('/check-step-one', [CheckdocHRDController::class,'step_one_show'])->name('step-one-show');
        Route::post('/check-step-one', [CheckdocHRDController::class,'step_one_post'])->name('step-one-post');
        Route::get('/check-step-two', [CheckdocHRDController::class,'step_two_show'])->name('step-two-show');
        Route::post('/check-step-two', [CheckdocHRDController::class,'step_two_post'])->name('step-two-post');
    // Route::resource('users', UserController::class);
 });

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/HRD', function () { return view('_HRDPage.index'); })->middleware(['checkRole:HRD,Admin']);
    Route::get('/Pekerja', function () { return view('_PekerjaPage.index'); })->middleware(['checkRole:Pekerja,Admin']);
 });

// contoh route yang menggunakan group
// Route::group(['middleware' => ['auth']], function() {
//     /**
//     * Logout Route
//     */
//     Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
//  });

