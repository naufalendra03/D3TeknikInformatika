<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all(); // Ambil semua data fasilitas
        return view('fasilitas', compact('fasilitas'));
    }
}
