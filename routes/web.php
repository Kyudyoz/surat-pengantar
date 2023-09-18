<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
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
Route::get('/setujui/{id}',[RtController::class, 'setuju'])->middleware('auth');
Route::get('/tolak/{id}',[RtController::class, 'tolak'])->middleware('auth');


//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//warga
Route::get('/buatSurat', [wargaController::class, 'buatSurat'])->middleware('auth');
Route::get('/buatSKTM', [wargaController::class, 'buatSktm'])->middleware('auth');
Route::get('/buatSKKR', [wargaController::class, 'buatSkkr'])->middleware('auth');
Route::get('/buatSKU', [wargaController::class, 'buatSku'])->middleware('auth');
Route::get('/buatSKD', [wargaController::class, 'buatSkd'])->middleware('auth');
Route::get('/buatSKK', [wargaController::class, 'buatSkk'])->middleware('auth');
Route::get('/buatSKJ', [wargaController::class, 'buatSkj'])->middleware('auth');
Route::post('/suratStore', [wargaController::class, 'store'])->middleware('auth');
Route::get('/editSurat/{id}', [wargaController::class, 'edit'])->middleware('auth');
Route::post('/editSurat/{id}/update', [wargaController::class, 'update'])->middleware('auth');
Route::get('/hapusSurat/{id}', [wargaController::class, 'destroy'])->middleware('auth');

//pdf
Route::get('/lihatSKTM/{id}', [PdfController::class, 'cetak_sktm'])->middleware('auth');
