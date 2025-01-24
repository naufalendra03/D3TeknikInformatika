<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Menampilkan semua kategori beserta jumlah galerinya.
     */
    public function index()
    {
        // Ambil semua kategori beserta relasi galerinya
        $kategoris = Kategori::with('galerinya')->get();

        // Return view galeri dengan data kategori
        return view('galeri', compact('kategoris'));
    }

    /**
     * Menampilkan detail galeri pada satu kategori.
     */
    public function show($id)
    {
        // Cari kategori berdasarkan ID, termasuk galerinya
        $kategori = Kategori::with('galerinya')->findOrFail($id);

        // Return view detail dengan data kategori
        return view('detail', compact('kategori'));
    }
}
