<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index' ])->name('admin.management');

    // Route kategori
    Route::get('/kategori', [KategoriController::class, 'index' ])->name('kategori.index');
    Route::get('/kategori/create', [KategoriController::class,'create'])->name('kategori.create');
    Route::post('/kategori', [KategoriController::class,'store'])->name('kategori.store');
    Route::get('/kategori//{id_kategori}/edit', [KategoriController::class,'edit'])->name('kategori.edit');
    Route::put('/kategori/{id_kategori}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{id_kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

    // Route admin apalah
});

require __DIR__.'/auth.php';
