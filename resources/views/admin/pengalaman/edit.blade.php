@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Perbarui Data Anda
        </h3>
    </div>
    <form action="{{ route('pengalaman.update',$pengalaman->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="card-body">

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Tahun_Masuk</label>
                <div class="col-sm-12">
                    <input type="int" class="form-control" value="{{ $pengalaman->tahun_masuk }}" name="tahun_masuk" placeholder="Tahun Masuk" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Tahun Selesai</label>
                <div class="col-sm-12">
                    <input type="int" class="form-control" value="{{ $pengalaman->tahun_selesai }}" name="tahun_selesai" placeholder="Tahun Selasai" required>
                </div>
            </div>

                     

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="{{ $pengalaman->pekerjaan}}"  name="pekerjaan" placeholder="ubah data" required>
                </div>
            </div>

           
            <div class="form-group">
                <label class="col-sm-2 col-form-label">Perusahaan</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="{{ $pengalaman->perusahan }}" name="perusahan" placeholder="Ubah Data" required>
                </div>
            </div>

            
            <div class="form-group">
                <label class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="{{ $pengalaman->kota }}" name="kota" placeholder="Ubah Data" required>
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