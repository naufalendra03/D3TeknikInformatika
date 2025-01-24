<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SambutanKetua extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan (opsional jika sesuai konvensi)
    protected $table = 'sambutan_ketuas';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'nama',
        'jabatan',
        'deskripsi',
        'gambar',
    ];

    /**
     * Konfigurasi akses URL penuh untuk file gambar
     */
    public function getGambarUrlAttribute()
    {
        return asset('storage/' . $this->gambar);
    }
}
