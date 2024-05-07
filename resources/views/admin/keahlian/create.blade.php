@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Masukan Data Keahlian
        </h3>
    </div>
    <form action="{{ route('keahlian.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Keahlian</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="keahlian" placeholder="Tambahkan data Anda" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">presentase_keahlian</label>
                <div class="col-sm-12">
                    <input type="int" class="form-control" name="presentase_keahlian" placeholder="Tambahkan data Anda" required>
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