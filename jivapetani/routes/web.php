<?php

use App\Http\Controllers\DetailPembelianController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CekLogin;

// ===== AUTH ROUTES =====
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/', [AuthController::class, 'do_login'])->name('login.process');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'do_register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// --------- ADMIN ---------
Route::middleware([CekLogin::class . ':admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/home', fn () => view('admin.home'))->name('home');

        // Kelola barang
        Route::resource('barang', BarangController::class);

        // Laporan penjualan
        Route::get('laporan', [DetailPembelianController::class, 'index'])->name('laporan.index');

        // Manajemen user (hanya index, edit, update, dan destroy)
        Route::resource('user', UserController::class)->except(['create', 'store', 'show']);
    });


// --------- PETANI ---------
Route::middleware([CekLogin::class . ':petani'])
    ->prefix('petani')
    ->name('petani.')
    ->group(function () {
        Route::get('/home', fn () => view('petani.home'))->name('home');

        // Override index() agar petani hanya melihat barang miliknya
        Route::get('barang', [BarangController::class, 'petaniIndex'])->name('barang.index');

        // Resource route untuk barang, kecuali index yang di-override
        Route::resource('barang', BarangController::class)->except(['index']);

        // Laporan
        Route::get('laporan', [DetailPembelianController::class, 'index'])->name('laporan.index');
    });



// --------- PEMBELI ---------
Route::middleware([CekLogin::class . ':pembeli'])
    ->prefix('pembeli')
    ->name('pembeli.') // Penting agar semua rute diawali dengan "pembeli."
    ->group(function () {
        Route::get('/home', fn () => view('pembeli.home'))->name('home');

        // Halaman daftar barang yang bisa dibeli
        Route::get('beli', [PembelianController::class, 'beliBarang'])->name('beli.index');

        // Proses pembelian barang
        Route::post('beli', [PembelianController::class, 'prosesBeli'])->name('beli.proses');

        // Riwayat pembelian
        Route::get('riwayat', [DetailPembelianController::class, 'riwayat'])->name('riwayat.index');
    });




// --------- USER ---------
Route::middleware([CekLogin::class . ':user'])
    ->prefix('user')
    ->name('user.')
    ->group(function () {
        Route::get('/home', fn () => view('user.home'))->name('home');
    });

// --------- DEFAULT HOME ---------
Route::get('/home', fn () => view('home'))->name('home');
