<?php

use App\Http\Controllers\Api\apiJobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

	
Route::post('/register', [\App\Http\Controllers\Api\ApllicantController::class,'register']);
Route::post('/login', [\App\Http\Controllers\Api\ApllicantController::class,'login']);
Route::apiResource('/job', ApiJobController::class);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Api\ApllicantController::class,'logout']);
    Route::get('user', [\App\Http\Controllers\Api\ApllicantController::class,'fetch']);
    Route::post('user', [\App\Http\Controllers\Api\ApllicantController::class,'updateProfile']);

});