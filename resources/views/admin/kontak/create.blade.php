@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Masukan Data Kontak
        </h3>
    </div>
    <form action="{{ route('kontak.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label class="col-sm-2 col-form-label">No Handphond</label>
                <div class="col-sm-12">
                    <input type="int" class="form-control" name="nomor_hp" placeholder="Tambahkan No HP Anda" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="alamat" placeholder="Tambahkan Alamat Anda" required>
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