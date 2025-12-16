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

Route::get('/tryout', function () {
    return view('tryout.tryout');
})->name('tryout.tryout');




Route::get('/tryout', [tryoutController::class, 'index'])->name('tryout');


Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');


Route::get('/tryout', [tryoutController::class, 'index'])->name('tryout');

//Route::get('/ujian', [UjianController::class, 'index'])->name('ujian');

Route::resource('ujian', UjianController::class);

Route::get('/ujian/{ujian}', [UjianController::class, 'show'])
     ->name('ujian.show');


Route::resource('soal', soalController::class);

Route::get('ujian/{ujian}/soal/create', [SoalController::class, 'create'])->name('soal.create');

Route::post('/ujian/{ujian}/soal', [SoalController::class, 'store'])->name('soal.store');



//Route::resource('ujian', DetailController::class);

//Route::get('/ujian', [UjianController::class, 'index'])->name('ujian.index');

//Route::post('/ujian', [UjianController::class, 'store'])->name('ujian.store');

