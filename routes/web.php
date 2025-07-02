<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ✅ Halaman Utama
Route::get('/', function () {
    return view('layouts.home'); 
})->name('home');

// ✅ Autentikasi
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ✅ Halaman Statis
Route::view('/organisasi', 'organisasi')->name('organisasi');
Route::get('/warta-jemaat', function () {
    return view('layouts.warta-jemaat');
});

Route::get('/berita', function () {
    return view('layouts.berita');
});

Route::get('/hubungi', function () {
    return view('layouts.hubungi');
});
Route::view('/lokasi', 'lokasi')->name('lokasi');

// ✅ Dashboard (untuk user yang sudah login)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // User biasa bisa melihat jadwal
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
});

// ✅ Admin-only (CRUD penuh untuk jadwal)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('/jadwal', JadwalController::class)->except(['index']);
});