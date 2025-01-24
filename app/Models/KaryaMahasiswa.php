<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryaMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['foto', 'judul', 'nama', 'deskripsi', 'link'];
}
