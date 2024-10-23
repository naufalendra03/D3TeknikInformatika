<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // Method untuk menampilkan semua berita acara
    public function index()
    {
        $berita_acara = BeritaAcara::all();
        return view('berita', compact('berita_acara'));
    }

    // Method untuk menyimpan data berita acara baru

    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'judul' => 'required',
        'isi' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Buat data Berita Acara tanpa gambar terlebih dahulu
    $beritaAcara = BeritaAcara::create([
        'judul' => $validatedData['judul'],
        'isi' => $validatedData['isi'],
        'published_date' => now(),
        'slug' => \Illuminate\Support\Str::slug($validatedData['judul']),
    ]);

    // Proses upload gambar menggunakan Spatie Media Library
    if ($request->hasFile('gambar')) {
        // Tambahkan file ke media collection dan dapatkan URL
        $beritaAcara->addMediaFromRequest('gambar')->toMediaCollection('gambar');
        $gambarUrl = $beritaAcara->getFirstMediaUrl('gambar'); // Dapatkan URL gambar

        // Log untuk memastikan URL gambar tidak kosong
        Log::info('Gambar URL: ' . $gambarUrl);

        // Simpan URL gambar ke kolom 'gambar' di database
        $beritaAcara->gambar = $gambarUrl;
        $beritaAcara->save(); // Simpan perubahan
    }

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('berita.index')->with('success', 'Berita acara berhasil ditambahkan!');
}

    
}
