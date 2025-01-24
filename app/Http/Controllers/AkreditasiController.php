<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;

class AkreditasiController extends Controller
{
    public function index()
    {
        $akreditasi = Akreditasi::all(); // Mengambil semua data akreditasi
        return view('akreditasi', compact('akreditasi'));
    }
}
