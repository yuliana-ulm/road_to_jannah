<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fiqihController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\manhajController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AqidahController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UploadgambarController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\PengajianController;
use App\Http\Controllers\UserController;

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


Route::get('/', [PengajianController::class, 'index'])->name('landingpage');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/register', [registerController::class, 'show'])->name('register.show');
Route::post('/register', [registerController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Route Aqidah
    Route::get('/aqidah', [AqidahController::class, 'index'])->name('aqidah');
    Route::get('/aqidah/hakikat-agama', function () {
        return view('aqidah.konten.hakikatAgama');
    });

    // Route Manhaj 
    Route::get('/manhaj', [manhajController::class, 'index'])->name('manhaj');
    Route::get('/manhaj/sunnah-nabi', function () {
        return view('manhaj.konten.manhaj-sunnahNabi');
    });

    // Route Fiqih 
    Route::get('/fiqih', [fiqihController::class, 'index'])->name('fiqih');
    Route::get('/fiqih/sholat', function () {
        return view('fiqih.konten.sholat');
    });
    Route::get('/fiqih/wudhu', function () {
        return view('fiqih.konten.wudhu');
    });



    Route::get('/sejarah', [sejarahController::class, 'index'])->name('sejarah');



    Route::group([
        'middleware' => 'is_admin',
    ], function () {
        Route::get('/beranda', [berandaController::class, 'index'])->name('beranda.index');

        Route::get('/data-artikel', [PegawaiController::class, 'index'])->name('data-artikel');
        Route::get('/artikel-create', [PegawaiController::class, 'create'])->name('create-artikel');
        Route::post('/simpan-artikel', [PegawaiController::class, 'store'])->name('simpan-artikel');
        Route::get('/edit-artikel/{id}', [PegawaiController::class, 'edit'])->name('edit-artikel');
        Route::post('/update-artikel/{id}', [PegawaiController::class, 'update'])->name('update-artikel');
        Route::get('/delete-artikel/{id}', [PegawaiController::class, 'destroy'])->name('delete-artikel');

        Route::get('/data-pengajian', [PengajianController::class, 'show'])->name('data-pengajian');
        Route::get('/create-pengajian', [PengajianController::class, 'create'])->name('create-pengajian');
        Route::post('/simpan-pengajian', [PengajianController::class, 'store'])->name('simpan-pengajian');
        Route::get('/edit-pengajian/{id}', [PengajianController::class, 'edit'])->name('edit-pengajian');
        Route::post('/update-pengajian/{id}', [PengajianController::class, 'update'])->name('update-pengajian');
        Route::get('/delete-pengajian/{id}', [PengajianController::class, 'destroy'])->name('delete-pengajian');

        Route::get('/data-user', [UserController::class, 'index'])->name('data-user');
        Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
        Route::post('/update-user/{id}', [UserController::class, 'update'])->name('update-user');
        Route::get('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete-user');

        Route::get('/create-gambar', [UploadgambarController::class, 'create'])->name('create-gambar.create');
        Route::post('/simpan-gambar', [UploadgambarController::class, 'store'])->name('simpan-gambar.store');
    });
});
