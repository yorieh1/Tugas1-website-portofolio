<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use App\Models\Kontak;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Profil;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $kontak = Kontak::get();
        $pengalaman = Pengalaman::get();
        $pendidikan = Pendidikan::get();
        $keahlian = Keahlian::get();
        $profil = Profil::first();
        //dd($kontak);
        return view('layouts.fronend.app', [
            'profil' => $profil,
            'keahlian' => $keahlian,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'kontak2' => $kontak

        ]);
    }
}
