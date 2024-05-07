@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<h1>Pengalaman</h1>

<a href="{{route('pengalaman.tambah-data')}}" class="btn btn-info" role="button">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tahun Masuk</th>
            <th scope="col">Tahun Selesai</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Perusahaan</th>
            <th scope="col">Kota</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $jumlah = 0;
        ?>
        @foreach ($pengalaman as $row)

        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $row->tahun_masuk }}</td>
            <td>{{$row->tahun_selesai}}</td>
            <td>{{$row->pekerjaan}}</td>
            <td>{{$row->perusahan}}</td>
            <td>{{$row->kota}}</td>
                       <td>
                <a href="{{route('pengalaman.edit',$row->id)}}" class="btn btn-info">edit</a>
                <form action="{{route('pengalaman.destroy',$row->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin Menghapus Data ini ?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>

            </td>

        </tr>
        @endforeach
    </tbody>


    <tr>

    </tr>
</table>

@endsection