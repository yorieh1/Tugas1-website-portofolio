<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use Illuminate\Http\Request;

class KeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keahlian = Keahlian::all();
        return view('admin.keahlian.index', [
            'keahlian' => $keahlian

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.keahlian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'keahlian' => 'required',
            'presentase_keahlian' => 'required',



        ]);

        $keahlian = $request->input('keahlian');
        $presentase = $request->input('presentase_keahlian');




        // dd($kas);

        Keahlian::create([
            'keahlian' => $keahlian,
            'presentase_keahlian' => $presentase,

        ]);

        return redirect()->route('keahlian')
            ->with('success', 'Informasi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keahlian $keahlian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $keahlian = Keahlian::find($id);
        return view('admin.keahlian.edit', [
            'keahlian' => $keahlian
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $keahlian = Keahlian::find($id);

        request()->validate([
            'keahlian' => 'required',
            'presentase_keahlian' => 'required',




        ]);

        $keahlian = $request->input('keahlian');
        $presentase = $request->input('presentase_keahlian');


        $keahlian->update([
            'keahlian' => $keahlian,
            'presentase_keahlian' => $presentase,



        ]);



        return redirect()->route('keahlian')
            ->with('success', 'Informasi created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $keahlian = Keahlian::find($id);


        //  delete data di databse
        $keahlian->delete();

        return redirect()->route('keahlian')
            ->with('success', 'Informasi created successfully.');
    }
}
