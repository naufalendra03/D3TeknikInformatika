<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use App\Models\KategoriHimpunan;

class KategoriHimpunanController extends Controller
{
    public function index()
    {
        // Mengambil semua kategori
        $kategoris = KategoriHimpunan::all();

        // Mengarahkan ke view himpunan.blade.php
        return view('himpunan', compact('kategoris'));

        $programKerjas = ProgramKerja::all(); // Ambil semua data Program Kerja
        return view('kategori-tahun', compact('programKerjas'));
    }
}
