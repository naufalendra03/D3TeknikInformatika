<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuasanaAkademik extends Model
{
    use HasFactory;

    protected $fillable = [
        'konten', // Field untuk menyimpan konten dari rich editor
    ];
}

