<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'gambar'];

    public function galeris()
    {
        return $this->hasMany(Galeri::class, 'kategori_id');
    }

    public function galerinya()
    {
        return $this->hasMany(Galeri::class, 'kategori_id');
    }
}
