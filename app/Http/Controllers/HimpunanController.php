<?php

namespace App\Http\Controllers;

use App\Models\Himpunan;
use App\Models\KategoriHimpunan;
use App\Models\ProgramKerja;

class HimpunanController extends Controller
{
    public function show($kategoriId)
    {
        // Mencari kategori berdasarkan ID
        $kategori = KategoriHimpunan::findOrFail($kategoriId);

        // Mengambil data himpunan yang terkait dengan kategori
        $himpunans = Himpunan::where('kategori_id', $kategoriId)->get();

        // Mengambil program kerja berdasarkan kategori_id
        $programKerjas = ProgramKerja::where('kategori_id', $kategoriId)->get();

        // Mengarahkan ke view kategori-tahun.blade.php
        return view('kategori-tahun', compact('kategori', 'himpunans', 'programKerjas'));
    }
}
