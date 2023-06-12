<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fiqihController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\aqidahController;
use App\Http\Controllers\manhajController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UploadgambarController;
use App\Http\Controllers\berandaController;

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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/register', [registerController::class, 'show'])->name('register.show');
Route::post('/register', [registerController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
    Route::get('/beranda',[berandaController::class,'index'])->name('beranda.index');

    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.'
    ], function () {
        Route::get('admin', [AdminController::class, 'index'])->name('AdminController.index');
        Route::get('admin/{id}', [AdminController::class, 'detail'])->name('admins.details');
    });
});

Route::get('/aqidah', [aqidahController::class, 'index']);
Route::get('/manhaj', [manhajController::class, 'index'])->name('manhaj');
Route::get('/fiqih', [fiqihController::class, 'index']);
Route::get('/sejarah', [sejarahController::class, 'index']);

    Route::post('/simpan-pegawai', [PegawaiController::class, 'store'])->name('simpan-pegawai.store');
    Route::get('/manhaj-create', [manhajController::class, 'create'])->name('create-pegawai.create');
    Route::get('/data-pegawai', [PegawaiController::class, 'index'])->name('data-pegawai.index');
    Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit-pegawai.edit');
    Route::post('/update-pegawai/{id}', [PegawaiController::class, 'update'])->name('update-pegawai.update');
    Route::get('/delete-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('delete-pegawai.destroy');

    Route::get('/data-gambar', [UploadgambarController::class, 'index'])->name('data-gambar.index');
    Route::get('/create-gambar', [UploadgambarController::class, 'create'])->name('create-gambar.create');
    Route::post('/simpan-gambar', [UploadgambarController::class, 'store'])->name('simpan-gambar.store');
    Route::get('/edit-gambar/{id}', [UploadgambarController::class, 'edit'])->name('edit-gambar.edit');
    Route::post('/update-gambar/{id}', [UploadgambarController::class, 'update'])->name('update-gambar.update');
    Route::get('/delete-gambar/{id}', [UploadgambarController::class, 'destroy'])->name('delete-gambar.destroy');
