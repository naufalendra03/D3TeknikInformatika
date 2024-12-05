<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SambutanController extends Controller
{
    public function index()
    {
        // Data untuk ditampilkan di halaman
        $data = [
            'title' => 'Sambutan Ketua Program Studi',
            'sambutan' => 'Selamat datang di Program Studi D3 Teknik Informatika Universitas Dian Nuswantoro. Kami berkomitmen untuk memberikan pendidikan terbaik...',
        ];

        // Memanggil view sambutan
        return view('sambutan', $data);
    }
}
