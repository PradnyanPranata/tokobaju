<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminVolunteerController;
use App\Http\Controllers\UserController;

// Rute untuk pengunjung (guest) sebelum login
Route::middleware('guest')->group(function () {
    // Halaman utama (index)
    Route::get('/', function () {
        return view('index');  
    })->name('index');

    // Halaman registrasi
    Route::get('/submit-registration', [RegistrationController::class, 'showRegistrationForm'])->name('signup.form');
    Route::post('/submit-registration', [RegistrationController::class, 'signup'])->name('signup');

    // Halaman login
    Route::get('/submit-login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/submit-login', [LoginController::class, 'login'])->name('login');
});

// Rute untuk pengguna yang sudah login
Route::middleware('auth')->group(function () {
    // Halaman utama setelah login (uts)
    Route::get('/uts', [HomeController::class, 'index'])->name('uts');

    // Rute logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Rute untuk halaman detail produk yang hanya dapat diakses oleh pengguna yang sudah login
    Route::get('/detailbarang1', function () {
        return view('detailbarang1');
    })->name('detailbarang1');
    
    Route::get('/detailbarang2', function () {
        return view('detailbarang2');
    })->name('detailbarang2');
    
    Route::get('/detailbarang3', function () {
        return view('detailbarang3');
    })->name('detailbarang3');
    
    Route::get('/detailbarang4', function () {
        return view('detailbarang4');
    })->name('detailbarang4');
    
    Route::get('/detailbarang5', function () {
        return view('detailbarang5');
    })->name('detailbarang5');
    
    Route::get('/detailbarang6', function () {
        return view('detailbarang6');
    })->name('detailbarang6');
    
    Route::get('/detailbarang7', function () {
        return view('detailbarang7');
    })->name('detailbarang7');
});

// Rute untuk admin yang sudah login dan memiliki akses admin
Route::middleware(['auth', 'AdminMiddleware'])->group(function () {
    // Halaman admin
    
    Route::get('/tampilanadmin', function () {
        return view('tampilanadmin');
    })->name('admin')->middleware('auth', 'AdminMiddleware');

    // Rute untuk halaman edit produk
    Route::get('/editbarang1', function () {
        return view('editbarang1');
    })->name('editbarang1');
    
    Route::get('/editbarang2', function () {
        return view('editbarang2');
    })->name('editbarang2');
    
    Route::get('/editbarang3', function () {
        return view('editbarang3');
    })->name('editbarang3');
    
    Route::get('/editbarang4', function () {
        return view('editbarang4');
    })->name('editbarang4');
    
    Route::get('/editbarang5', function () {
        return view('editbarang5');
    })->name('editbarang5');
    
    Route::get('/editbarang6', function () {
        return view('editbarang6');
    })->name('editbarang6');
    
    Route::get('/editbarang7', function () {
        return view('editbarang7');
    })->name('editbarang7');
});

// Rute untuk halaman kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
