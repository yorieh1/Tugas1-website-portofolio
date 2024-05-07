@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Perbarui Data Anda
        </h3>
    </div>
    <form action="{{ route('keahlian.update',$keahlian->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="card-body">

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Keahlian</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="{{ $keahlian->keahlian}}" name="keahlian" placeholder="Ubah Data" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">presentase_keahlian</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="{{ $keahlian->presentase_keahlian}}" name="presentase_keahlian" placeholder="Ubah Data" required>
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