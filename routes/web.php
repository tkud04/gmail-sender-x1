<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

//AdmissionBoox routes
Route::get('/', [MainController::class,'getIndex']);


//Auth routes
Route::get('forgot-password', [LoginController::class,'getForgotPassword']);
Route::get('reset-password', [LoginController::class,'getResetPassword']);
Route::get('bye', [LoginController::class,'getLogout']);

//Admin routes
Route::get('add-sender', [AdminController::class,'getAddSender']);
