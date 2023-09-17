<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\wargaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'blog']);
Route::get('/profil',[HomeController::class, 'profil'])->middleware('auth');

//rt
Route::get('/dashboardRt',[HomeController::class, 'dashboardRt'])->middleware('auth');
Route::get('/dashboard',[HomeController::class, 'dashboard'])->middleware('auth');
Route::get('/validasi',[RtController::class, 'validasi'])->middleware('auth');
Route::get('/dataWarga',[RtController::class, 'dataWarga'])->middleware('auth');


//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//warga
Route::get('/buatSurat', [wargaController::class, 'buatSurat'])->middleware('auth');
Route::get('/hapusSurat/{id}', [wargaController::class, 'destroy'])->middleware('auth');

