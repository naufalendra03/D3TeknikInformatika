<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'ipk',
        'tahun_lulus',
        'wisuda',
        'pekerjaan',
        'nama_instansi',
        'is_valid',
    ];
}
