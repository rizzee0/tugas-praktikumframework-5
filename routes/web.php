<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jurusan', [JurusanController::class, 'index']);

Route::get('/jurusan/{id}', [JurusanController::class, 'show']);
