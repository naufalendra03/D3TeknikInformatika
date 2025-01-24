<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriHimpunan extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'gambar'];

    public function himpunans()
    {
        return $this->hasMany(Himpunan::class, 'kategori_id');
    }
    // KategoriHimpunan.php
    public function programKerjas()
{
    return $this->hasMany(ProgramKerja::class, 'kategori_id');
}


}
