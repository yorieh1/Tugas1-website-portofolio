<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengalaman = Pengalaman::all();
        return view('admin.pengalaman.index', [
            'pengalaman' => $pengalaman
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengalaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'tahun_masuk' => 'required',
            'tahun_selesai' => 'required',
            'pekerjaan' => 'required',
            'perusahan' => 'required',
            'kota' => 'required',

        ]);

        $tahun_masuk = $request->input('tahun_masuk');
        $tahun_selesai = $request->input('tahun_selesai');
        $pekerjaan = $request->input('pekerjaan');
        $perusahaan = $request->input('perusahan');
        $kota = $request->input('kota');


        //dd($pekerjaan);

        Pengalaman::create([
            'tahun_masuk' => $tahun_masuk,
            'tahun_selesai' => $tahun_selesai,
            'pekerjaan' => $pekerjaan,
            'perusahan' => $perusahaan,
            'kota' => $kota,

        ]);

        return redirect()->route('pengalaman')
            ->with('success', 'Informasi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengalaman $pengalaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $pengalaman = Pengalaman::find($id);
        return view('admin.pengalaman.edit', [
            'pengalaman' => $pengalaman
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pengalaman = Pengalaman::find($id);

        request()->validate([
            'tahun_masuk' => 'required',
            'tahun_selesai' => 'required',
            'pekerjaan' => 'required',
            'perusahan' => 'required',
            'kota' => 'required',


        ]);

        $tahun_masuk = $request->input('tahun_masuk');
        $tahun_selesai = $request->input('tahun_selesai');
        $pekerjaan = $request->input('pekerjaan');
        $perusahaan = $request->input('perusahan');
        $kota = $request->input('kota');





        $pengalaman->update([
            'tahun_masuk' => $tahun_masuk,
            'tahun_selesai' => $tahun_selesai,
            'pekerjaan' => $pekerjaan,
            'perusahan' => $perusahaan,
            'kota' => $kota,
        ]);



        return redirect()->route('pengalaman')
            ->with('success', 'Informasi created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengalaman = Pengalaman::find($id);


        //  delete data di databse
        $pengalaman->delete();

        return redirect()->route('pengalaman')
            ->with('success', 'Informasi created successfully.');
    }
}
