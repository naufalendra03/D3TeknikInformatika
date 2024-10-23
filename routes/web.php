<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HimpunanController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/akademik', [AkademikController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/alumni', [AlumniController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/himpunan', [HimpunanController::class, 'index']);

Route::get('halaman', function () {
    return view('halaman');
});