<?php

namespace App\Http\Controllers;
use App\Models\SambutanKetua;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    public function index()
    {
        // Data untuk ditampilkan di halaman
        $data = SambutanKetua::first();
        return view('sambutan', compact('data'));

        // Memanggil view sambutan
    }
}
