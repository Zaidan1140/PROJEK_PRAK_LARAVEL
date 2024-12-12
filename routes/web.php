<?php

use App\Http\Controllers\PemesananController;

Route::get('/penerbangan', [PemesananController::class, 'index'])->name('penerbangan.index');
Route::post('/penerbangan', [PemesananController::class, 'store'])->name('penerbangan.store');
Route::get('/penerbangan/edit/{id}', [PemesananController::class, 'edit'])->name('penerbangan.edit');
Route::post('/penerbangan/update/{id}', [PemesananController::class, 'update'])->name('penerbangan.update');
Route::get('/penerbangan/delete/{id}', [PemesananController::class, 'destroy'])->name('penerbangan.destroy');
Route::get('/penerbangan/cetak_pdf', [PemesananController::class, 'cetakPdf'])->name('penerbangan.cetakPdf');
