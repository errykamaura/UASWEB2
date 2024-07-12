<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comparisons extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'fasilitas','lokasi', 'luas', 'harga', 'jarak_tempat_kerja'];
    protected $dates = ['deleted_at'];
}
