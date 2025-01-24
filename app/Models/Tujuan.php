<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini (opsional jika nama tabel sudah mengikuti konvensi)
    protected $table = 'tujuans';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'deskripsi',
        'gambar',
    ];

    // Kolom yang tidak bisa diisi (guarded)
    // protected $guarded = ['id'];
}
