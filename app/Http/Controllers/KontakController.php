<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('admin.kontak.index', [
            'kontak' => $kontak
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'nomor_hp' => 'required',
            'alamat' => 'required',


        ]);

        $nomor = $request->input('nomor_hp');
        $alamat = $request->input('alamat');



        // dd($kas);

        Kontak::create([
            'nomor_hp' => $nomor,
            'alamat' => $alamat,


        ]);

        return redirect()->route('kontak')
            ->with('success', 'Informasi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kontak = Kontak::find($id);
        return view('admin.kontak.edit', [
            'kontak' => $kontak
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kontak = Kontak::find($id);

        request()->validate([
            'nomor_hp' => 'required',
            'alamat' => 'required',



        ]);

        $nomor = $request->input('nomor_hp');
        $alamat = $request->input('alamat');



        $kontak->update([
            'nomor_hp' => $nomor,
            'alamat' => $alamat,

        ]);



        return redirect()->route('kontak')
            ->with('success', 'Informasi created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kontak = Kontak::find($id);


        //  delete data di databse
        $kontak->delete();

        return redirect()->route('kontak')
            ->with('success', 'Informasi created successfully.');
    }
}
