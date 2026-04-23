<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pendakian extends Model
{
     protected $fillable = [
        'id_pendakian',
        'id_user',
        'id_gunung',
        'tanggal_naik',
        'tanggal_turun',
        'jumlah_anggota',
        'kode_pendakian',
        'status',
    ];

    public function gunungs()
    {
        return $this->belongsTo(pendakians::class); 
    }
}
