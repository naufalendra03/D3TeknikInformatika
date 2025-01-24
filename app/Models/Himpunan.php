<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Himpunan extends Model
{
    use HasFactory;

    protected $fillable = ['logo', 'visi', 'misi', 'sekretaris', 'ketua', 'bendahara', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriHimpunan::class, 'kategori_id');
    }
}
