<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'pasiens';

    protected $hidden = [
        'password',
        'remember_token',
        '_token',
    ];

    public function kesehatan()
    {
        $this->hasMany(KesehatanPasien::class,'id_pasien','id');
    }
}
