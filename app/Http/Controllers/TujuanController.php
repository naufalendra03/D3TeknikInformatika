<?php

namespace App\Http\Controllers;

use App\Models\Tujuan;

class TujuanController extends Controller
{
    public function index()
    {
        $tujuans = Tujuan::all(); // Ambil semua data tujuan
        return view('tujuan', compact('tujuans'));
    }
}

