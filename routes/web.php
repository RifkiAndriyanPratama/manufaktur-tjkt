<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/tambah', [BarangController::class,'create'])->name('barang.create');
Route::post('/barang', [BarangController::class,'store'])->name('barang.store');
Route::get('/barang/{id_barang}/edit', [BarangController::class,'edit'])->name('barang.edit');
Route::put('/barang/{id_barang}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{barang}', [BarangController::class, 'destroy'])->name('barang.destroy');


Route::get('/kategori', [KategoriController::class, 'index' ])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class,'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class,'store'])->name('kategori.store');
Route::get('/kategori//{id_kategori}/edit', [KategoriController::class,'edit'])->name('kategori.edit');
Route::put('/kategori/{id_kategori}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id_kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

