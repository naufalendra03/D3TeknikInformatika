<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BeritaAcara extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * Daftar kolom yang dapat diisi secara massal
     */
    protected $fillable = [
        'judul',
        'isi',
        'slug',
        'published_date',
    ];

    /**
     * Casting kolom ke tipe tertentu
     */
    protected $casts = [
        'published_date' => 'datetime', // Casting kolom menjadi instance Carbon
    ];

    /**
     * Boot method untuk model
     * Menangani event saat model disimpan (saving)
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Buat slug otomatis jika slug kosong atau judul diubah
            if (empty($model->slug) || $model->isDirty('judul')) {
                $model->slug = Str::slug($model->judul);
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Registrasi koleksi media dengan Spatie Media Library
     */
    
    /**
     * Relasi media ke tabel media (untuk mendukung query langsung)
     */
    // Metode relasi media
    

    /**
     * Relasi ke koleksi gambar menggunakan Spatie Media Library
     * Untuk mengambil file gambar dengan lebih mudah
     */
    
}
