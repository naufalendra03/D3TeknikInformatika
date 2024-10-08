<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class BeritaAcara extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $casts = [
        'tags' => 'array', // Menandai kolom tags sebagai array
    ];

    protected $fillable = [
        'judul', 'slug', 'isi', 'author', 'category', 'published_date', 'tags',
    ];

    // Mutator untuk membuat slug otomatis dari judul
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = $value;

        // Hanya set slug jika slug belum ada
        if (!isset($this->attributes['slug']) || empty($this->attributes['slug'])) {
            $this->attributes['slug'] = Str::slug($value, '-');
        }
    }

    // Konfigurasi Spatie Media Library
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')->singleFile(); // Koleksi untuk gambar
    }
}
