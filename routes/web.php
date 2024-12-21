<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index' ])->name('admin.management');

    // Route kategori
    Route::get('/kategori', [KategoriController::class, 'index' ])->name('kategori.index');
    Route::get('/kategori/create', [KategoriController::class,'create'])->name('kategori.create');
    Route::post('/kategori', [KategoriController::class,'store'])->name('kategori.store');
    Route::get('/kategori/{id_kategori}/edit', [KategoriController::class,'edit'])->name('kategori.edit');
    Route::put('/kategori/{id_kategori}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{id_kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

    // Route Barang
    Route::get('/barang', [BarangController::class, 'index' ])->name('barang.index');
    Route::get('/barang/create', [BarangController::class,'create'])->name('barang.create');
    Route::post('/barang', [BarangController::class,'store'])->name('barang.store');
    Route::get('/barang/{id_barang}/edit', [BarangController::class,'edit'])->name('barang.edit');
    Route::put('/barang/{id_barang}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/{id_barang}', [BarangController::class, 'destroy'])->name('barang.destroy');

    // Route Kelas
    Route::get('/kelas', [KelasController::class, 'index' ])->name('kelas.index');
    Route::get('/kelas/create', [KelasController::class,'create'])->name('kelas.create');
    Route::post('/kelas', [KelasController::class,'store'])->name('kelas.store');
    Route::get('/kelas//{id_kelas}/edit', [KelasController::class,'edit'])->name('kelas.edit');
    Route::put('/kelas/{id_kelas}', [KelasController::class, 'update'])->name('kelas.update');
    Route::delete('/kelas/{id_kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');

    // Route Siswa
    Route::get('/siswa', [SiswaController::class, 'index' ])->name('siswa.index');
    Route::get('/siswa/create', [SiswaController::class,'create'])->name('siswa.create');
    Route::post('/siswa', [SiswaController::class,'store'])->name('siswa.store');
    Route::get('/siswa//{id_siswa}/edit', [SiswaController::class,'edit'])->name('siswa.edit');
    Route::put('/siswa/{id_siswa}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/siswa/{id_siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
});
    

require __DIR__.'/auth.php';
