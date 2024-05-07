@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<h1>Profile</h1>

<a href="{{route('profil.tambah-data')}}" class="btn btn-info" role="button">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Jenis-Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Foto</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $jumlah = 0;
        ?>
        @foreach ($profil as $row)

        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $row->nama }}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->jenis_kelamin}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{$row->jurusan}}</td>
            <td><img src="{{ url('foto/profil/'. $row->foto) }}" style="width:100px; heigh:100px"> </td>
            <td>
                <a href="{{route('profil.edit',$row->id)}}" class="btn btn-info">edit</a>
                <form action="{{route('profil.destroy',$row->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin Menghapus Data ini ?')">
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