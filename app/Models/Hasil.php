<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $fillable = ['id'. 'nama','fasilitas','lokasi','luas','harga','jarak_tempat_kerja','ahp'];
    protected $dates = ['deleted_at'];
}
