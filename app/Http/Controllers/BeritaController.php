<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BeritaController extends Controller
{
    // Method untuk menampilkan semua berita acara
    public function index()
    {
        // Ambil semua data berita acara
        $berita_acara = BeritaAcara::with('media')->get(); // Pastikan media di-load untuk optimasi
        return view('berita', compact('berita_acara'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q'); // Kata kunci pencarian
        $results = BeritaAcara::where('judul', 'like', "%$query%")
            ->orWhere('isi', 'like', "%$query%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('search', compact('results', 'query'));
    }
    public function show($slug)
    {
        $berita = BeritaAcara::where('slug', $slug)->firstOrFail();

        return view('show', compact('berita'));
    }


    // Method untuk menyimpan data berita acara baru
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
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
        try {
            if ($request->hasFile('gambar')) {
                // Tambahkan file ke media collection
                $beritaAcara->addMediaFromRequest('gambar')->toMediaCollection('gambar');

                // Log untuk memastikan gambar berhasil ditambahkan
                Log::info('Gambar berhasil diupload untuk Berita Acara ID: ' . $beritaAcara->id);
            }
        } catch (\Exception $e) {
            // Log jika ada error
            Log::error('Error saat mengupload gambar: ' . $e->getMessage());

            Log::info('Gambar URL: ' . $beritaAcara->getFirstMediaUrl('gambar'));

        }
        

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('berita.index')->with('success', 'Berita acara berhasil ditambahkan!');
    }
}
