<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;

class ProgramKerjaController extends Controller
{
    /**
     * Menampilkan detail program kerja berdasarkan slug.
     */
    public function show($slug)
    {
        // Cari program kerja berdasarkan slug
        $programKerja = ProgramKerja::where('slug', $slug)->firstOrFail();

        // Kirim data ke view
        return view('program-kerja.show', compact('programKerja'));
    }
}
