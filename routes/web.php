<?php

use App\Http\Controllers\WebSmpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataSiswaPpdbController;
use App\Http\Controllers\AuthController;
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

// route
Route::get('/', [WebSmpController::class, 'home']);
Route::get('about', [WebSmpController::class, 'about']);
Route::get('contact', [WebSmpController::class, 'contact']);

// login and register

// Route::get('admin', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

// ppdb
Route::get('daftarppdb', [DataSiswaPpdbController::class, 'index']);
Route::post('daftarppdb', [DataSiswaPpdbController::class, 'store']);
Route::get('success', [DataSiswaPpdbController::class, 'success']);

// crud admin
Route::resource('students', AdminController::class);
