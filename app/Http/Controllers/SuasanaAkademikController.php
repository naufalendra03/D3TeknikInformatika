<?php

namespace App\Http\Controllers;

use App\Models\SuasanaAkademik;
use Illuminate\Http\Request;

class SuasanaAkademikController extends Controller
{
    /**
     * Menampilkan halaman "Suasana Akademik".
     */
    public function index()
{
    $suasana = SuasanaAkademik::latest()->first(); // Ambil data terbaru dari tabel
    return view('suasana', compact('suasana'));
}
}
