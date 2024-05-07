<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('admin.pendidikan.index', [
            'pendidikan' => $pendidikan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'tahun_masuk' => 'required',
            'tahun_selesai' => 'required',
            'instusi' => 'required',
            'jurusan' => 'required',

        ]);

        $tahun_masuk = $request->input('tahun_masuk');
        $tahun_selesai = $request->input('tahun_selesai');
        $institusi = $request->input('instusi');
        $jurusan = $request->input('jurusan');


        // dd($kas);

        Pendidikan::create([
            'tahun_masuk' => $tahun_masuk,
            'tahun_selesai' => $tahun_selesai,
            'instusi' => $institusi,
            'jurusan' => $jurusan,

        ]);

        return redirect()->route('pendidikan')
            ->with('success', 'Informasi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pendidikan = Pendidikan::find($id);
        return view('admin.pendidikan.edit', [
            'pendidikan' => $pendidikan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pendidikan = Pendidikan::find($id);

        request()->validate([
            'tahun_masuk' => 'required',
            'tahun_selesai' => 'required',
            'instusi' => 'required',
            'jurusan' => 'required',


        ]);

        $tahun_masuk = $request->input('tahun_masuk');
        $tahun_selesai = $request->input('tahun_selesai');
        $institusi = $request->input('instusi');
        $jurusan = $request->input('jurusan');




        $pendidikan->update([
            'tahun_masuk' => $tahun_masuk,
            'tahun_selesai' => $tahun_selesai,
            'instusi' => $institusi,
            'jurusan' => $jurusan,
        ]);



        return redirect()->route('pendidikan')
            ->with('success', 'Informasi created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pendidikan = Pendidikan::find($id);


        //  delete data di databse
        $pendidikan->delete();

        return redirect()->route('pendidikan')
            ->with('success', 'Informasi created successfully.');
    }
}
