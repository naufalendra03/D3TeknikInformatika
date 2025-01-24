<?php

namespace App\Http\Controllers;

use App\Models\KaryaMahasiswa;

class KaryaMahasiswaController extends Controller
{
    public function index()
    {
        $karyaMahasiswa = KaryaMahasiswa::all();
        return view('karya', compact('karyaMahasiswa'));
    }
}
