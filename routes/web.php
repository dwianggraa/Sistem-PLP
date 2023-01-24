<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DataSiswaController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataSMKController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\DataDosBingController;
use App\Http\Controllers\DataGuruPamongController;
use App\Http\Controllers\DataSiswaDospimController;
use App\Models\DataSiswa;
use App\Models\DataSiswaPembimbing;


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
    return view('welcome');
});

// Auth::routes();

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/post-login', [LoginController::class, 'autentifikasi']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [HomeController::class, 'index'])->middleware('isLogin');


Route::get('/datasmk', [DataSMKController::class, 'index']);
Route::get('/datasmk/create', [DataSMKController::class, 'createdatasmk']);
Route::post('/datasmk/create', [DataSMKController::class, 'store']);

Route::get('/datasmk/edit/{id}', [DataSMKController::class, 'edit']);
Route::post('/datasmk/update/{id}', [DataSMKController::class, 'update']);
Route::get('/datasmk/delete/{id}', [DataSMKController::class, 'destroy']);

//datamahasiswa koorprodi CRUD
Route::get('/datamhs', [DataSiswaController::class, 'index']);
Route::get('/datamhs/edit/{id}', [DataSiswaController::class, 'editKoorProdi']);
Route::post('/datamhs/update/{id}', [DataSiswaController::class, 'updateKoorProdi']);
Route::get('/datamhs/delete/{id}', [DataSiswaController::class, 'destroyKoorProdi']);
Route::post('/datamhs/create', [DataSiswaController::class, 'store']);

Route::get('/dataformplp', [DataSiswaDospimController::class, 'indexKoorProdi']);

//mahasiswa
Route::get('/mahasiswa/create', [DataSiswaController::class, 'formPLP']);
Route::post('/mahasiswa/create', [DataSiswaController::class, 'store']);

Route::get('/datauser', [UserController::class, 'index']);
Route::get('/datauser/create', [UserController::class, 'createdatauser']);
Route::post('/datauser/create', [UserController::class, 'store']);
Route::get('/datauser/edit/{id}', [UserController::class, 'edit']);
Route::post('/datauser/update/{id}', [UserController::class, 'update']);
Route::get('/datauser/delete/{id}', [UserController::class, 'destroy']);

// Untuk di Guru Pamong
Route::get('/datamahasiswa', [DataSiswaController::class, 'indexKoorSMK']);
Route::get('/datamahasiswa/edit/{id}', [DataSiswaController::class, 'editkoorSMK']);
Route::post('/datamahasiswa/update/{id}', [DataSiswaController::class, 'updatekoorsmk']);


Route::get('/datadosbing', [DataDosBingController::class, 'datadosbing']);
Route::get('/datadosbing/create', [DataDosBingController::class, 'createdatadosbing']);
Route::post('/datadosbing/create', [DataDosBingController::class, 'store']);
Route::get('/datadosbing/edit/{id}', [DataDosBingController::class, 'edit']);
Route::get('/datadosbing/delete/{id}', [DataDosBingController::class, 'destroy']);
Route::post('/datadosbing/update/{id}', [DataDosBingController::class, 'update']);

Route::get('/datagurupamong', [DataGuruPamongController::class, 'datagurupamong']);
Route::get('/datagurupamong/create', [DataGuruPamongController::class, 'createdatagurupamong']);
Route::post('/datagurupamong/create', [DataGuruPamongController::class, 'store']);
Route::get('/datagurupamong/edit/{id}', [DataGuruPamongController::class, 'edit']);
Route::post('/datagurupamong/update/{id}', [DataGuruPamongController::class, 'update']);
Route::get('/datagurupamong/delete/{id}', [DataGuruPamongController::class, 'destroy']);


// Verifikasi data  pimpinan prodi
Route::get('/verifikasidata/{id}', [DataSiswaDospimController::class, 'editData']);
Route::post('/verifikasidata/{id}', [DataSiswaDospimController::class, 'updateData']);

// Verifikasi data  pimpinan smk
Route::get('/verifikasidata-mhs-plp/{id}', [DataSiswaDospimController::class, 'editDataMHSPLP']);
Route::get('/verifikasidataplp', [DataSiswaController::class, 'indexpimpinanSMK']);
Route::post('/verifikasidata-mhs-plp/{id}', [DataSiswaDospimController::class, 'updateDataMHSPLP']);


// View Mahasiswa
Route::get('/mahasiswa/info-penerimaan', [MahasiswaController::class, 'index']);
