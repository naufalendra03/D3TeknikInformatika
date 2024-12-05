<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HimpunanController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BeritaAcaraController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GaleriController;


// Home Page
Route::get('/', [HomeController::class, 'index']);

// Akademik
Route::get('/akademik/kurikulum', [AkademikController::class, 'index']);

// Profile
Route::get('/profile/visi_misi', [ProfileController::class, 'index']);

// Kemahasiswaan
Route::get('/kemahasiswaan/alumni', [AlumniController::class, 'index']);

// Publikasi
Route::get('/publikasi/berita', [BeritaController::class, 'index']);

// Himpunan
Route::get('/himpunan/2024', [HimpunanController::class, 'index']);

// Sambutan
Route::get('/profile/sambutan', [SambutanController::class, 'index']);

// Dosen
Route::get('/dosen', [DosenController::class, 'index']);

// Berita Acara
Route::get('/berita-acara/search', [BeritaController::class, 'search'])->name('berita-acara.search');

// Agenda Kegiatan
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');


// Halaman Sederhana
Route::get('halaman', function () {
    return view('halaman');
});
Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/search', [BeritaController::class, 'search'])->name('berita-acara.search');
