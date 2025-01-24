<?php

namespace App\Http\Controllers;

use App\Models\Mitra;

class MitraController extends Controller
{
    public function index()
    {
        $mitra = Mitra::all(); // Mengambil semua data mitra
        return view('mitra', compact('mitra'));
    }
}
