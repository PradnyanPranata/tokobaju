<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AdminController;


// Rute untuk pengunjung (guest) sebelum login
Route::middleware('guest')->group(function () {
    // Halaman utama (index)

    // Halaman registrasi
    Route::get('/submit-registration', [RegistrationController::class, 'showRegistrationForm'])->name('signup.form');
    Route::post('/submit-registration', [RegistrationController::class, 'signup'])->name('signup');

    // Halaman login
    Route::get('/submit-login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/submit-login/benar', [LoginController::class, 'login'])->name('login');
});

// Rute untuk pengguna yang sudah login
Route::middleware('auth')->group(function () {
    // Halaman utama setelah login (uts)
    Route::get('/uts', [HomeController::class, 'index'])->name('uts');

    // Rute logout
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

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

    Route::get('/detailbarang8', function () {
        return view('detailbarang8');
    })->name('detailbarang8');

    Route::get('/detailbarang9', function () {
        return view('detailbarang9');
    })->name('detailbarang9');

    // Rute Pembelian Produk
    Route::post('/beli-produk/{id}', [TransactionController::class, 'buyProduct'])->name('beli.produk');
});

// Rute untuk admin yang sudah login dan memiliki akses admin
Route::middleware(['auth', 'AdminMiddleware'])->group(function () {
    // Halaman admin
    Route::get('/tampilanadmin', function () {
        return view('tampilanadmin');
    })->name('admin');

    Route::get('/transaksi', [AdminController::class, 'showTransactions'])->name('admin.transaksi');

    // Route untuk Edit Barang
    Route::get('/editbarang1', [ProductController::class, 'edit'])->name('editbarang1')->defaults('id', 1);
    Route::get('/editbarang2', [ProductController::class, 'edit'])->name('editbarang2')->defaults('id', 2);
    Route::get('/editbarang3', [ProductController::class, 'edit'])->name('editbarang3')->defaults('id', 3);
    Route::get('/editbarang4', [ProductController::class, 'edit'])->name('editbarang4')->defaults('id', 4);
    Route::get('/editbarang5', [ProductController::class, 'edit'])->name('editbarang5')->defaults('id', 5);
    Route::get('/editbarang6', [ProductController::class, 'edit'])->name('editbarang6')->defaults('id', 6);
    Route::get('/editbarang7', [ProductController::class, 'edit'])->name('editbarang7')->defaults('id', 7);
    Route::get('/editbarang8', [ProductController::class, 'edit'])->name('editbarang8')->defaults('id', 8);
    Route::get('/editbarang9', [ProductController::class, 'edit'])->name('editbarang9')->defaults('id', 9);
    
    // Route untuk Update Barang
    Route::put('/editbarang1', [ProductController::class, 'update'])->name('updatebarang1')->defaults('id', 1);
    Route::put('/editbarang2', [ProductController::class, 'update'])->name('updatebarang2')->defaults('id', 2);
    Route::put('/editbarang3', [ProductController::class, 'update'])->name('updatebarang3')->defaults('id', 3);
    Route::put('/editbarang4', [ProductController::class, 'update'])->name('updatebarang4')->defaults('id', 4);
    Route::put('/editbarang5', [ProductController::class, 'update'])->name('updatebarang5')->defaults('id', 5);
    Route::put('/editbarang6', [ProductController::class, 'update'])->name('updatebarang6')->defaults('id', 6);
    Route::put('/editbarang7', [ProductController::class, 'update'])->name('updatebarang7')->defaults('id', 7);
    Route::put('/editbarang8', [ProductController::class, 'update'])->name('updatebarang8')->defaults('id', 8);
    Route::put('/editbarang9', [ProductController::class, 'update'])->name('updatebarang9')->defaults('id', 9);
    

});

// Rute untuk halaman kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/', function () {
    return view('index');  
})->name('index');


