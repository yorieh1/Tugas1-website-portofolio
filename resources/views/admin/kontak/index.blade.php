@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<h1>Kontak</h1>

<a href="{{route('kontak.tambah-data')}}" class="btn btn-info" role="button">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">No Handpond</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $jumlah = 0;
        ?>
        @foreach ($kontak as $row)

        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $row->nomor_hp }}</td>
            <td>{{ $row->alamat }}</td>
            <td>
                <a href="{{route('kontak.edit',$row->id)}}" class="btn btn-info">edit</a>
                <form action="{{route('kontak.destroy',$row->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin Menghapus Data ini ?')">
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