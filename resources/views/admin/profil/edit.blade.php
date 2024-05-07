@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Tambah Pemasukan
        </h3>
    </div>
    <form action="{{ route('profil.update',$profil->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="card-body">

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="{{ $profil->nama }}" name="nama" placeholder="Perbarui Data Anda" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" value="{{ $profil->email }}" name="email" placeholder="Perbarui Data Anda" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Jenis-Kelamin</label>
                <div class="col-sm-12">
                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="{{ $profil->alamat }}"  name="alamat" placeholder="Perbarui Data Anda" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="{{ $profil->jurusan }}" name="jurusan" placeholder="Perbarui Data Anda" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-12">
                    <input type="file" class="form-control"  name="foto" placeholder="Perbarui Data Anda">
                </div>
            </div>


        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="?page=i_data_ks" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

@endsection