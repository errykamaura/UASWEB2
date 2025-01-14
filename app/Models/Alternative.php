<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Alternative extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama', 'fasilitas','lokasi', 'luas', 'harga', 'jarak_tempat_kerja'];
    protected $dates = ['deleted_at'];

    // public function getCodeAttribute($value) {
    //     return strtoupper($value);
    // }

    // public function details() {
    //     return $this->hasMany(AlternativeDetail::class, 'alternative_id');
    // }

    // public function comparisonsX() {
    //     return $this->hasMany(AlternativeComparison::class, 'x_alternative_id');
    // }

    // public function comparisonsY() {
    //     return $this->hasMany(AlternativeComparison::class, 'y_alternative_id');
    // }

    // public function priority() {
    //     return $this->hasMany(AlternativePriority::class, 'alternative_id');
    // }

    // public function priorities() {
    //     return $this->hasMany(AlternativePriority::class, 'alternative_id');
    // }
}
