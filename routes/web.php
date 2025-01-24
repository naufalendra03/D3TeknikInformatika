<?php

use App\Models\Himpunan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TujuanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SasaranController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\HimpunanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\BeritaAcaraController;
use App\Http\Controllers\KategoriHimpunanController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\KaryaMahasiswaController;
use App\Http\Controllers\KalenderAkademikController;
use App\Http\Controllers\SuasanaAkademikController;

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

// Sambutan
Route::get('/profile/sambutan', [SambutanController::class, 'index']);

// Dosen
Route::get('/akademik/dosen', [DosenController::class, 'index']);

// Berita Acara
Route::get('/berita-acara/search', [BeritaController::class, 'search'])->name('berita-acara.search');

// Agenda Kegiatan
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/profile/tujuan', [TujuanController::class, 'index'])->name('tujuan');

Route::get('/profile/sasaran', [SasaranController::class, 'index'])->name('sasaran.index');

Route::get('/profile/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');

Route::get('/profile/akreditasi', [AkreditasiController::class, 'index']);

Route::get('/profile/mitra', [MitraController::class, 'index']);

Route::get('/akademik/dosen', [DosenController::class, 'index']);

// Halaman Sederhana
Route::get('halaman', function () {
    return view('halaman');
});
Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/search', [BeritaController::class, 'search'])->name('berita-acara.search');



Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
Route::post('/alumni', [AlumniController::class, 'store'])->name('alumni.store');


Route::get('/himpunan/program-kerja/{slug}', [HimpunanController::class, 'show'])->name('program-kerja.show');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/{kategori}', [KategoriController::class, 'show'])->name('kategori.detail');

Route::get('/galeri', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/galeri/{id}', [KategoriController::class, 'show'])->name('kategori.show');

Route::get('/kategori', [KategoriHimpunanController::class, 'index'])->name('kategori.index');
Route::get('/kategori/{slug}', [KategoriHimpunanController::class, 'show'])->name('kategori.show');
Route::get('/himpunan/{slug}', [HimpunanController::class, 'show'])->name('himpunan.show');

// Route untuk halaman index galeri kategori
Route::get('/himpunan', [KategoriHimpunanController::class, 'index'])->name('himpunan.index');

// Route untuk halaman detail kategori
Route::get('/himpunan/{id}', [HimpunanController::class, 'show'])->name('himpunan.show');

Route::get('/programkerja/{slug}', [ProgramKerjaController::class, 'show'])->name('programkerja.show');

Route::get('/program-kerja/{slug}', [ProgramKerjaController::class, 'show'])->name('readmore');

Route::get('/publikasi/karya', [KaryaMahasiswaController::class, 'index'])->name('karya');

Route::get('/akademik/suasana-akademik', [SuasanaAkademikController::class, 'index'])->name('suasana-akademik.index');
