<?php

namespace App\Http\Controllers;

use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all(); // Ambil semua data dosen
        return view('dosen', compact('dosens')); // Pastikan view mengarah ke dosen.blade.php
    }
}

