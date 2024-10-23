<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index()
        {
            // Ambil data pertama dari tabel HomePage
            $homePage = Home::first();
            
            // Ambil gambar secara random
            $randomImages = [
                $homePage->image_1,
                $homePage->image_2
            ];
            
            // Pilih gambar secara acak
            $randomImage = $randomImages[array_rand($randomImages)];
    
            // Kembalikan view dengan data yang diperlukan
            return view('homepage', compact('homePage', 'randomImage'));
        }
    }