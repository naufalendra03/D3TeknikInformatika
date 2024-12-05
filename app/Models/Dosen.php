<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    // Nama tabel jika tidak sesuai dengan nama model (opsional)
    protected $table = 'dosens';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',
        'nip',
        'photo',
    ];
}
