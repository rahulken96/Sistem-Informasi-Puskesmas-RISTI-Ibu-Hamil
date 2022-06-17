<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesehatanPasien extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'kesehatan_pasiens';

    public function pasien()
    {
        $this->belongsTo(Pasien::class,'id_pasien','id');
    }
}
