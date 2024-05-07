<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil = Profil::all();
        return view('admin.profil.index', [
            'profil' => $profil
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048'

        ]);

        $nama = $request->input('nama');
        $email = $request->input('email');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $alamat = $request->input('alamat');
        $jurusan = $request->input('jurusan');
        $foto = $request->file('foto');

        $foto->storeAs('/foto/profil/', $foto->hashName());
        // dd($kas);

        Profil::create([
            'nama' => $nama,
            'email' => $email,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'jurusan' => $jurusan,
            'foto' => $foto->hashName(),

        ]);

        return redirect()->route('profil')
            ->with('success', 'Informasi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $profil = Profil::find($id);
        return view('admin.profil.edit', [
            'profil' => $profil
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $profil = Profil::find($id);

        request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'

        ]);

        $nama = $request->input('nama');
        $email = $request->input('email');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $alamat = $request->input('alamat');
        $jurusan = $request->input('jurusan');
        $foto = $request->file('foto');

        // dd($kas);

        if ($foto) {
            // Upload
            $foto->storeAs('/foto/profil/', $foto->hashName());

            // Delete
            Storage::exists('/foto/profil/' . $profil->foto);
            Storage::delete('/foto/profil/' . $profil->foto);

            $profil->update([
                'nama' => $nama,
                'email' => $email,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'jurusan' => $jurusan,
                'foto' => $foto->hashName(),

            ]);
        } else {
            $profil->update([
                'nama' => $nama,
                'email' => $email,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'jurusan' => $jurusan,
            ]);
        }


        return redirect()->route('profil')
            ->with('success', 'Informasi created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $profil = Profil::find($id);

        // Delete
        Storage::exists('/foto/profil/' . $profil->foto);
        Storage::delete('/foto/profil/' . $profil->foto);

        //  delete data di databse
        $profil->delete();

        return redirect()->route('profil')
            ->with('success', 'Informasi created successfully.');
    }
}
