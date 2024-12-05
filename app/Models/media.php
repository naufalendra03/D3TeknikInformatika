<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use Illuminate\Http\Request;

class BeritaAcaraController extends Controller
{
    public function index()
    {
        // Ambil berita acara beserta gambar (media)
        $beritaAcaras = BeritaAcara::with('media')->get();

        return view('berita_acara.index', compact('beritaAcaras'));
    }
}
