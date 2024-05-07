<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{

    use HasFactory;
    protected $table = 'flights_pendidikan';
    protected $fillable = [
        'tahun_masuk',
        'tahun_selesai',
        'instusi',
        'jurusan',

    ];
}
