<?php

namespace App\Http\Controllers;

use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        // Mengambil data galeri dengan paginasi
        $galeris = Galeri::latest()->paginate(9);
        return view('galeri', compact('galeris'));
    }
}