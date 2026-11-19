<?php

use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('matakuliah', MatakuliahController::class)
    ->only(['index', 'create', 'store', 'show']);
    
// Menampilkan daftar jurusan
Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan.index');

// Menampilkan form tambah jurusan
Route::get('/jurusan/create', [JurusanController::class, 'create'])
    ->name('jurusan.create');

// Menampilkan detail jurusan
Route::get('/jurusan/{id}', [JurusanController::class, 'show']);

// Menyimpan data jurusan
Route::post('/jurusan', [JurusanController::class, 'store'])
    ->name('jurusan.store');
