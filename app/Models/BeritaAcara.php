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

    // Mutator untuk membuat slug otomatis dari judul dan memastikan unik-nya slug
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = $value;
        
        // Generate basic slug
        $slug = Str::slug($value, '-');

        // Periksa apakah slug sudah ada di database
        $count = static::where('slug', 'LIKE', "{$slug}%")->count();

        // Jika slug sudah ada, tambahkan angka untuk membuatnya unik
        $this->attributes['slug'] = $count ? "{$slug}-{$count}" : $slug;
    }
}

