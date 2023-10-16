<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/blog', [PostController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profil'])->middleware('auth');
Route::get('/pengaturan', [HomeController::class, 'pengaturan'])->middleware('auth');
Route::get('/infoRt', [HomeController::class, 'infoRt']);
Route::get('/editPass', [HomeController::class, 'editPass'])->middleware('auth');
Route::put('/userProfile/update', [HomeController::class, 'update'])->middleware('auth');
Route::post('/updateNoHp/{id}', [HomeController::class, 'updateNoHp'])->middleware('auth');
Route::post('/updatePass/{id}', [HomeController::class, 'updatePass'])->middleware('auth');


//rt
Route::get('/dashboardRt', [HomeController::class, 'dashboardRt'])->middleware('auth');
Route::get('/validasi', [RtController::class, 'validasi'])->middleware('auth');
Route::get('/validasiWarga', [RtController::class, 'validasiWarga'])->middleware('auth');
Route::get('/unggahTtd', [RtController::class, 'unggahTtd'])->middleware('auth');
Route::post('/updateTtd/{id}', [RtController::class, 'updateTtd'])->middleware('auth');
Route::get('/dataWarga', [RtController::class, 'dataWarga'])->middleware('auth');
Route::get('/tambahWarga', [RtController::class, 'tambahWarga'])->middleware('auth');
Route::post('/storeWarga', [RtController::class, 'storeWarga'])->middleware('auth');
Route::get('/lihatDetail/{id}', [RtController::class, 'detail'])->middleware('auth');
Route::get('/setujui/{id}', [RtController::class, 'setuju'])->middleware('auth');
Route::get('/tolak/{id}', [RtController::class, 'tolak'])->middleware('auth');
Route::get('/detailValidasi/{id}', [RtController::class, 'detailValidasi'])->middleware('auth');
Route::get('/setujuiAkun/{id}', [RtController::class, 'setujuiAkun'])->middleware('auth');
Route::get('/tolakAkun/{id}', [RtController::class, 'tolakAkun'])->middleware('auth');

//post
Route::get('/buat', [PostController::class, 'create'])->middleware('auth');
Route::get('/create/checkSlug', [PostController::class, 'checkSlug'])->middleware('auth');
Route::post('/storePost', [PostController::class, 'store'])->middleware('auth');
Route::get('/posts/show/{post:slug}', [PostController::class, 'show']);
Route::get('/posts/edit/{post:slug}', [PostController::class, 'edit'])->middleware('auth');
Route::post('/posts/update/{post:slug}', [PostController::class, 'update'])->middleware('auth');
Route::get('/deletePost/{post:slug}', [PostController::class, 'destroy'])->middleware('auth');

//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//warga
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('auth');
Route::get('/buatSurat', [wargaController::class, 'buatSurat'])->middleware('auth');
Route::get('/suratSaya', [wargaController::class, 'suratSaya'])->middleware('auth');
Route::get('/buatSKTM', [wargaController::class, 'buatSktm'])->middleware('auth');
Route::get('/buatSKKR', [wargaController::class, 'buatSkkr'])->middleware('auth');
Route::get('/buatSKU', [wargaController::class, 'buatSku'])->middleware('auth');
Route::get('/buatSKD', [wargaController::class, 'buatSkd'])->middleware('auth');
Route::get('/buatSKK', [wargaController::class, 'buatSkk'])->middleware('auth');
Route::get('/buatSKJ', [wargaController::class, 'buatSkj'])->middleware('auth');
Route::post('/suratStore', [wargaController::class, 'store'])->middleware('auth');
Route::get('/editSKTM/{id}', [wargaController::class, 'editSktm'])->middleware('auth');
Route::get('/editSKKR/{id}', [wargaController::class, 'editSkkr'])->middleware('auth');
Route::get('/editSKU/{id}', [wargaController::class, 'editSku'])->middleware('auth');
Route::get('/editSKD/{id}', [wargaController::class, 'editSkd'])->middleware('auth');
Route::get('/editSKK/{id}', [wargaController::class, 'editSkk'])->middleware('auth');
Route::get('/editSKJ/{id}', [wargaController::class, 'editSkj'])->middleware('auth');
Route::post('/updateSKTM/{id}', [wargaController::class, 'updateSktm'])->middleware('auth');
Route::post('/updateSKKR/{id}', [wargaController::class, 'updateSkkr'])->middleware('auth');
Route::post('/updateSKU/{id}', [wargaController::class, 'updateSku'])->middleware('auth');
Route::post('/updateSKD/{id}', [wargaController::class, 'updateSkd'])->middleware('auth');
Route::post('/updateSKK/{id}', [wargaController::class, 'updateSkk'])->middleware('auth');
Route::post('/updateSKJ/{id}', [wargaController::class, 'updateSkj'])->middleware('auth');
Route::get('/hapusSurat/{id}', [wargaController::class, 'destroy'])->middleware('auth');

//pdf
Route::get('/lihatSKTM/{id}', [PdfController::class, 'cetak_sktm'])->middleware('auth');
Route::get('/lihatSKU/{id}', [PdfController::class, 'cetak_sku'])->middleware('auth');
Route::get('/lihatSKK/{id}', [PdfController::class, 'cetak_skk'])->middleware('auth');
Route::get('/lihatSKKR/{id}', [PdfController::class, 'cetak_skkr'])->middleware('auth');
Route::get('/lihatSKJ/{id}', [PdfController::class, 'cetak_skj'])->middleware('auth');
Route::get('/lihatSKD/{id}', [PdfController::class, 'cetak_skd'])->middleware('auth');

//admin
Route::get('/dashboardAdmin', [HomeController::class, 'dashboardAdmin'])->middleware('auth');
Route::get('/tambahUser/{id}', [AdminController::class, 'tambahUser'])->middleware('auth');
Route::post('/storeUser', [AdminController::class, 'storeUser'])->middleware('auth');
Route::get('/tambahRt', [AdminController::class, 'tambahRt'])->middleware('auth');
Route::post('/storeRt', [AdminController::class, 'storeRt'])->middleware('auth');
Route::get('/dataUser', [AdminController::class, 'dataUser'])->middleware('auth');
Route::get('/dataRt', [AdminController::class, 'dataRt'])->middleware('auth');
Route::get('/lihatDetailRt/{id}', [AdminController::class, 'lihatDetailRt'])->middleware('auth');
Route::post('/updateRt/{id}', [AdminController::class, 'updateRt'])->middleware('auth');
Route::get('/setujuiAkunAdmin/{id}', [AdminController::class, 'setujuiAkun'])->middleware('auth');
Route::get('/tolakAkunAdmin/{id}', [AdminController::class, 'tolakAkun'])->middleware('auth');
Route::get('/validasiAkun', [AdminController::class, 'validasiAkun'])->middleware('auth');
