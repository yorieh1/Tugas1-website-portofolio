@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Masukan Data Pengalaman
        </h3>
    </div>
    <form action="{{ route('pengalaman.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Tahun masuk</label>
                <div class="col-sm-12">
                    <input type="int" class="form-control" name="tahun_masuk" placeholder="Tambahkan Data Tahun Masuk" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Tahun selesai</label>
                <div class="col-sm-12">
                    <input type="int" class="form-control" name="tahun_selesai" placeholder="Tambahkan Data Tahun Selesai" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="pekerjaan" placeholder="Tambahkan Data Pekerjaan" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Perusahaan</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control"  name="perusahan" placeholder="Tambahkan Data Perusahaan" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control"  name="kota" placeholder="Tambahkan Data Kota" required>
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