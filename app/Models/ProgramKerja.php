<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProgramKerja extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi secara massal.
     */
    protected $fillable = [
        'judul',
        'deskripsi',
        'slug',
        'gambar',
    ];

    /**
     * Boot method untuk model.
     * Menangani event saat model disimpan (saving).
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

    public function kategori()
{
    return $this->belongsTo(KategoriHimpunan::class, 'kategori_id');
}
}
