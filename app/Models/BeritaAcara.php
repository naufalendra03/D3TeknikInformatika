<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BeritaAcara extends Model
{
    protected $casts = [
        'tags' => 'array', // Menandai kolom tags sebagai array
    ];

    protected $fillable = [
        'judul', 'slug', 'isi', 'gambar', 'author', 'category', 'published_date', 'tags',
    ];

    // Mutator untuk membuat slug otomatis dari judul
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }
}
