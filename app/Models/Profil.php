<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{

    use HasFactory;
    protected $table = 'flights_profil';
    protected $fillable = [
        'nama',
        'email',
        'jenis_kelamin',
        'alamat',
        'jurusan',
        'foto',

    ];
}
