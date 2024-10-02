<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Mahasiswa extends Model
{
    use HasFactory;

    protected static function booted()
    {
        // Membuat slug secara otomatis saat data mahasiswa dibuat
        static::creating(function ($mahasiswa) {
            // Buat slug dari nim atau atribut lain (misalnya nama)
            $mahasiswa->slug_mhs = Str::slug($mahasiswa->nama_mhs);
        });

        // Jika Anda ingin memperbarui slug saat nim di-update
        static::updating(function ($mahasiswa) {
            $mahasiswa->slug_mhs = Str::slug($mahasiswa->nama_mhs);
        });
    }
}