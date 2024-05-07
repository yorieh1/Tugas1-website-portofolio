<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keahlian extends Model
{

    use HasFactory;
    protected $table = 'flights_keahlian';
    protected $fillable = [
        'keahlian',
        'presentase_keahlian',

    ];
}
