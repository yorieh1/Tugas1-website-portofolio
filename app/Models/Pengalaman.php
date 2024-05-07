<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{

    use HasFactory;
    protected $table = 'flights_pengalaman';
    protected $fillable = [
        'tahun_masuk',
        'tahun_selesai',
        'pekerjaan',
        'perusahan',
        'kota',

    ];
}
