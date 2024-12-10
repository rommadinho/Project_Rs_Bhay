<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard_Pegawai;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PelatihanPegawaiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Routes (dapat diakses tanpa autentikasi)
Route::get('/', function () {
    return redirect()->route('login'); // Mengarahkan root URL ke halaman login
})->name('landingpage');

// Route untuk form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// Rute untuk login acak (random login)
Route::get('/random_login', [LoginController::class, 'randomLogin'])->name('random.login'); // Tambahkan rute ini jika diperlukan

// Proses logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Routes (hanya dapat diakses setelah login)
Route::middleware(['auth'])->group(function () {

    // Route untuk Dashboard Pegawai
    Route::get('/dashboard_pegawai', [Dashboard_Pegawai::class, 'index'])->name('dashboard_pegawai');

    // Route Resource untuk Pelatihan Pegawai
    Route::prefix('pelatihan')->group(function () {
        Route::get('/tambah-pelatihan', [PelatihanpegawaiController::class, 'create'])->name('pelatihan.create');
        Route::post('/proses-tambah-pelatihan', [PelatihanController::class, 'store'])->name('pelatihan.store');
        Route::get('/daftar-pelatihan', [PelatihanController::class, 'index'])->name('pelatihan.index');
        Route::get('/edit-pelatihan/{id}', [PelatihanController::class, 'edit'])->name('pelatihan.edit');
        Route::delete('/hapus-pelatihan/{id}', [PelatihanController::class, 'destroy'])->name('pelatihan.destroy');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    });
 
});

