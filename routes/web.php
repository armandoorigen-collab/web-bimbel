<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\soalController;
use App\Http\Controllers\tryoutController;
use App\Http\Controllers\UjianController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/belajar', function () {
    return view('belajar');
})->name('belajar');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/latihan/soal', function () {
    return view('latihan.soal');
})->name('latihan.soal');



Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/latihan', [soalController::class, 'index'])->name('soal');

Route::get('/tryout', [tryoutController::class, 'index'])->name('tryout');

//Route::get('/ujian', [UjianController::class, 'index'])->name('ujian');

Route::resource('ujian', UjianController::class);

//Route::get('/ujian', [UjianController::class, 'index'])->name('ujian.index');

//Route::post('/ujian', [UjianController::class, 'store'])->name('ujian.store');

