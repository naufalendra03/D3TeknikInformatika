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

    protected $fillable = [
        'judul', 'isi', 'slug', 'gambar', 'published_date'
    ];
    

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->judul);
            }
        });
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gambar')->singleFile(); // Koleksi untuk gambar
    }
}
