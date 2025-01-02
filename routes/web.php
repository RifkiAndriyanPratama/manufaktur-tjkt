<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PeminjamanController::class,'index']);

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index' ])->name('admin.management');

    // Route kategori
    Route::get('/kategori', [KategoriController::class, 'index' ])->name('kategori.index');
    Route::post('/kategori', [KategoriController::class,'store'])->name('kategori.store');
    Route::put('/kategori/{id_kategori}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{id_kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    Route::get('/kategori/search', [KategoriController::class, 'search'])->name('kategori.search');

    // Route Barang
    Route::get('/barang', [BarangController::class, 'index' ])->name('barang.index');
    Route::post('/barang', [BarangController::class,'store'])->name('barang.store');
    Route::put('/barang/{id_barang}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/{id_barang}', [BarangController::class, 'destroy'])->name('barang.destroy');
    Route::get('/barang/search', [BarangController::class, 'search'])->name('barang.search');

    // Route Kelas
    Route::get('/kelas', [KelasController::class, 'index' ])->name('kelas.index');
    Route::post('/kelas', [KelasController::class,'store'])->name('kelas.store');
    Route::put('/kelas/{id_kelas}', [KelasController::class, 'update'])->name('kelas.update');
    Route::delete('/kelas/{id_kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');
    Route::get('/kelas/search', [KelasController::class, 'search'])->name('kelas.search');

    // Route Siswa
    Route::get('/siswa', [SiswaController::class, 'index' ])->name('siswa.index');
    Route::post('/siswa', [SiswaController::class,'store'])->name('siswa.store');
    Route::put('/siswa/{id_siswa}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/siswa/{id_siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

    // Route riwayat
    Route::get('/riwayat', [DetailController::class, 'riwayat'])->name('peminjaman.riwayat');
});
    
// Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
// Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');


Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman/{id_peminjaman}', [PeminjamanController::class, 'show'])->name('peminjaman.show');
Route::post('/peminjaman/{id_peminjaman}/pengembalian', [PeminjamanController::class, 'pengembalian'])->name('peminjaman.pengembalian');
Route::get('/peminjaman/export-pdf', [PeminjamanController::class, 'exportPdf'])->name('peminjaman.export-pdf');

Route::get('/detail/create/{id_peminjaman}', [DetailController::class, 'create'])-> name('detail.create');
Route::post('/detail/store', [DetailController::class, 'store'])->name('detail.store');

// pdf
Route::get('/export-pdf' , [DetailController::class, 'exportPdf'])->name('exportPdf');

require __DIR__.'/auth.php';
