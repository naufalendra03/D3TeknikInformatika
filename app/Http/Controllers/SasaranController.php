<?php

namespace App\Http\Controllers;

use App\Models\Sasaran;
use Illuminate\Http\Request;

class SasaranController extends Controller
{
    public function index()
    {
        $sasarans = Sasaran::all(); // Ambil semua data sasaran
        return view('sasaran', compact('sasarans')); // Merender file `resources/views/sasaran.blade.php`
    }
}
