<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Kategori;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        // Ambil kategori ID dari parameter (jika ada)
        $kategoriId = $request->query('kategori_id');

        // Mengambil daftar kategori untuk dropdown filter
        $kategoris = Kategori::all();

        // Ambil galeri yang valid dan grupkan berdasarkan bulan dan tahun
        $galeris = Galeri::with('kategori') // Sertakan data kategori untuk optimasi
            ->when($kategoriId, function ($query) use ($kategoriId) {
                $query->where('kategori_id', $kategoriId);
            })
            ->whereNotNull('judul') // Pastikan judul tidak null
            ->whereNotNull('gambar') // Pastikan gambar tidak null
            ->orderBy('created_at', 'desc') // Urutkan berdasarkan waktu terbaru
            ->get();

        // Kelompokkan galeri berdasarkan bulan dan tahun
        $groupedGaleri = $galeris->groupBy(function ($item) {
            return $item->created_at->format('F Y'); // Contoh format: "December 2024"
        });

        return view('galeri', compact('groupedGaleri', 'kategoris', 'kategoriId'));
    }
}
