<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HimpunanController extends Controller
{
    public function index()
    {
        return view('himpunan');
    }
}
