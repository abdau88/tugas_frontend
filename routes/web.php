<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('home');
});

// Mahasiswa Routes
Route::resource('mahasiswa', MahasiswaController::class);

// Dosen Routes
Route::resource('dosen', DosenController::class);

