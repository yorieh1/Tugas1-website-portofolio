@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<h1>Pendidikan</h1>

<a href="{{route('pendidikan.tambah-data')}}" class="btn btn-info" role="button">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tahun Masuk</th>
            <th scope="col">Tahun Selesai</th>
            <th scope="col">Institusi</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $jumlah = 0;
        ?>
        @foreach ($pendidikan as $row)

        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $row->tahun_masuk }}</td>
            <td>{{$row->tahun_selesai}}</td>
            <td>{{$row->instusi}}</td>
            <td>{{$row->jurusan}}</td>
                       <td>
                <a href="{{route('pendidikan.edit',$row->id)}}" class="btn btn-info">edit</a>
                <form action="{{route('pendidikan.destroy',$row->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin Menghapus Data ini ?')">
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