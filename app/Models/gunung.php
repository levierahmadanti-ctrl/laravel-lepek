<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gunung extends Model
{
    protected $fillable = [
        'nama_gunung',
        'lokasi',
        'estimasi_waktu',
        'kuota',
        'deskripsi',
    ];

    public function pendakians()
    {
        return $this->hasMany(pendakians::class); 
    }

}
