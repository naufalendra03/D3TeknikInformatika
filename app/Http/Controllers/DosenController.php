<?php

namespace App\Http\Controllers;

use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();

        return view('dosen', compact('dosens'));
    }
}
