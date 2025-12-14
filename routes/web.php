<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AnggotaController;

// 🟢 Halaman utama diarahkan ke daftar buku
Route::get('/', function () {
    return redirect()->route('buku.index');
});

// 🟣 Route resource untuk Buku
Route::resource('buku', BukuController::class);

// 🟡 Route resource untuk Kategori
Route::resource('kategori', KategoriController::class);

// 🔹 (Opsional) Route cepat buat lihat kategori tanpa error
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::resource('anggota', AnggotaController::class)->parameters(['anggota' => 'anggota']);
Route::resource('peminjaman', PeminjamanController::class);