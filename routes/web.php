<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeahlianController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('foto/{folder}/{filename}', function ($folder, $filename) {
    $path = storage_path('app/foto/' . $folder . '/' . $filename);

    if (!file_exists($path)) {
        abort(500);
    }
    $file = file_get_contents($path);
    $type = mime_content_type($path);

    return response($file)->header('Content-Type', $type);
})->name('show-foto');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
// Route::get('/', [HomeController::class, 'dashboard']);

// Route Profil
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/profil/tambah-data', [ProfilController::class, 'create'])->name('profil.tambah-data');
Route::post('/profil/store', [ProfilController::class, 'store'])->name('profil.store');
Route::get('/profil/edit/{id}', [ProfilController::class, 'edit'])->name('profil.edit');
Route::delete('/profil/destroy/{id}', [ProfilController::class, 'destroy'])->name('profil.destroy');
Route::patch('/profil/update/{id}', [ProfilController::class, 'update'])->name('profil.update');

// Route Pendidikan
Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');
Route::get('/pendidikan/tambah-data', [PendidikanController::class, 'create'])->name('pendidikan.tambah-data');
Route::post('/pendidikan/store', [PendidikanController::class, 'store'])->name('pendidikan.store');
Route::get('/pendidikan/edit/{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
Route::delete('/pendidikan/destroy/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');
Route::patch('/pendidikan/update/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');

// Route Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/kontak/tambah-data', [KontakController::class, 'create'])->name('kontak.tambah-data');
Route::post('/kontak/store', [KontakController::class, 'store'])->name('kontak.store');
Route::get('/kontak/edit/{id}', [KontakController::class, 'edit'])->name('kontak.edit');
Route::delete('/kontak/destroy/{id}', [KontakController::class, 'destroy'])->name('kontak.destroy');
Route::patch('/kontak/update/{id}', [KontakController::class, 'update'])->name('kontak.update');

// Route Pengalaman
Route::get('/pengalaman', [PengalamanController::class, 'index'])->name('pengalaman');
Route::get('/pengalaman/tambah-data', [PengalamanController::class, 'create'])->name('pengalaman.tambah-data');
Route::post('/pengalaman/store', [PengalamanController::class, 'store'])->name('pengalaman.store');
Route::get('/pengalaman/edit/{id}', [PengalamanController::class, 'edit'])->name('pengalaman.edit');
Route::delete('/pengalaman/destroy/{id}', [PengalamanController::class, 'destroy'])->name('pengalaman.destroy');
Route::patch('/pengalaman/update/{id}', [PengalamanController::class, 'update'])->name('pengalaman.update');

// Route Keahlian
Route::get('/keahlian', [KeahlianController::class, 'index'])->name('keahlian');
Route::get('/keahlian/tambah-data', [KeahlianController::class, 'create'])->name('keahlian.tambah-data');
Route::post('/keahlian/store', [KeahlianController::class, 'store'])->name('keahlian.store');
Route::get('/keahlian/edit/{id}', [KeahlianController::class, 'edit'])->name('keahlian.edit');
Route::delete('/keahlian/destroy/{id}', [KeahlianController::class, 'destroy'])->name('keahlian.destroy');
Route::patch('/keahlian/update/{id}', [KeahlianController::class, 'update'])->name('keahlian.update');
