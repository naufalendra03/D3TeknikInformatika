<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KalenderAkademik extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'kalender_akademik';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'tahun',
        'gambar',
    ];
}
