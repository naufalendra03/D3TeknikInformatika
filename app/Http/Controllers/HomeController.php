<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\BeritaAcara;
use App\Models\ProgramKerja;
use App\Models\HomepageContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    // Ambil data pertama dari tabel Home
    $homePage = Home::first();

    // Jika data Home tidak ditemukan
    if (!$homePage) {
        return redirect()->back()->with('error', 'Data Home tidak ditemukan. Harap tambahkan data terlebih dahulu.');
    }

    // Ambil gambar secara random (dengan validasi jika tidak ada gambar)
    $randomImages = array_filter([
        $homePage->image_1 ?? null,
        $homePage->image_2 ?? null,
    ]);

    // Pilih gambar secara acak jika ada
    $randomImage = count($randomImages) > 0 
        ? $randomImages[array_rand($randomImages)] 
        : null;

    // Ambil 3 berita terbaru
    $berita_acara = BeritaAcara::orderBy('published_date', 'desc')->take(3)->get();

    // Ambil 3 program kerja terbaru
    $programKerjas = ProgramKerja::latest()->take(3)->get();

    // Ambil konten homepage (misalnya)
    $homepageContent = HomepageContent::first(); // Ambil data pertama dari tabel HomepageContent

    // Kembalikan view dengan data yang diperlukan
    return view('homepage', compact('homePage', 'randomImage', 'berita_acara', 'programKerjas', 'homepageContent'));
}
}
