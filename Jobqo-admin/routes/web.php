<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRDController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HRD_Application;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HRD_JobController;
use App\Http\Controllers\JobTypeController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobSalaryController;
use App\Http\Controllers\CheckdocHRDController;
use App\Http\Controllers\CompanyTypeController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\PublicLoginController;
use App\Http\Controllers\HRDJobSalaryController;
use App\Http\Controllers\public\p_JobController;
use App\Http\Controllers\CompanySectorController;
use App\Http\Controllers\HRDEditProfileController;
use App\Http\Controllers\public\LoginRegisController;
use App\Http\Controllers\public\ApplicantProfileController;
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


Route::get('private/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('private/login', [LoginController::class, 'authenticate']);

Route::get('/login', [LoginRegisController::class, 'index'])->name('login')->middleware('guest');
Route::post('/loginPost', [LoginRegisController::class, 'authenticate']);
Route::get('/register', [LoginRegisController::class, 'registerPage']);
Route::post('/register', [LoginRegisController::class, 'registerPost']);
Route::get('/logout-user', [LoginRegisController::class, 'logout']);



Route::get('/testPage', [PublicLoginController::class, 'testHalaman']);
Route::get('/logout', [LoginController::class, 'logout']);

// RUTE untuk web Publik
Route::get('/', [DashboardController::class, 'HomePublic']);
Route::get('/job', [p_JobController::class, 'IndexJob']);
    Route::get('/job/s/', [p_JobController::class, 'cariJob']);
    Route::get('/job/detail/{id}', [p_JobController::class, 'DetailJobs']);

//Rute untuk Applicant
Route::get('/profile', [ApplicantProfileController::class, 'profile']);


// Route untuk role admin

Route::group(['prefix' => 'admin','middleware' => ['auth'],['checkRole:Admin']], function() {
    Route::get('/', [DashboardController::class,'indexAdmin']);
    Route::resource('jobs', JobController::class);
        Route::resource('jobs_type', JobTypeController::class);
        Route::resource('jobs_position', JobPositionController::class);
        Route::resource('jobs_salary', JobSalaryController::class);

    Route::resource('companies', CompanyController::class);
        Route::resource('companies_sector', CompanySectorController::class);
        Route::resource('companies_type', CompanyTypeController::class);
    // route untuk user
    Route::resource('applicant', ApplicantController::class);
    Route::resource('hrd', HRDController::class);
    Route::resource('admin', AdminController::class);

    // non resource controller 
    Route::get('/verifycompany',[VerifyController::class,'index']);
        Route::post('/verifycompany/{id}',[VerifyController::class,'Accept']);
        Route::delete('/verifycompany/{id}',[VerifyController::class,'destroy']);

    Route::get('/verifyhrd',[VerifyController::class,'indexHRD']);
    Route::get('/verifyhrd/create',[VerifyController::class,'createHRD']);
        Route::post('/verifyhrd/create',[VerifyController::class,'storeHRD']);
 });

 Route::group(['prefix' => 'hrd','middleware' => ['auth'],['checkRole:HRD']], function() {
    Route::get('/', [DashboardController::class,'indexHRD'])->middleware('checkDoc');
    Route::resource('jobs', HRD_JobController::class);
        Route::resource('jobs_salary', HRDJobSalaryController::class);
    Route::get('/waiting-room', [DashboardController::class,'waitingRoom']);
    
    Route::get('/setting-hrd/{id}',[HRDEditProfileController::class,'edit_hrd']);
        Route::patch('/setting-hrd/{id}',[HRDEditProfileController::class,'post_edit_hrd']);
    Route::get('/setting-company/{id}',[HRDEditProfileController::class,'edit_company']);
        Route::patch('/setting-company/{id}',[HRDEditProfileController::class,'post_edit_company']);
        // HRD_Application

    Route::resource('lamaran', HRD_Application::class);

        Route::get('/check-step-one', [CheckdocHRDController::class,'step_one_show'])->name('step-one-show');
        Route::post('/check-step-one', [CheckdocHRDController::class,'step_one_post'])->name('step-one-post');
        Route::get('/check-step-two', [CheckdocHRDController::class,'step_two_show'])->name('step-two-show');
        Route::post('/check-step-two', [CheckdocHRDController::class,'step_two_post'])->name('step-two-post');
 });


 Route::group(['prefix' => 'applicant','middleware' => ['auth'],['checkRole:Pekerja']], function() {
    Route::get('/', [DashboardController::class,'indexApplicant'])->middleware('checkDoc');
    
 });

