@extends('layouts.main')
@section('title', 'Chapter')
@section('content')
<h1>Keahlian</h1>

<a href="{{route('keahlian.tambah-data')}}" class="btn btn-info" role="button">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Keahlian</th>
            <th scope="col">Presentase Keahlian</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $jumlah = 0;
        ?>
        @foreach ($keahlian as $row)

        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $row->keahlian }}</td>
            <td>{{ $row->presentase_keahlian }}</td>
            
            <td>
                <a href="{{route('keahlian.edit',$row->id)}}" class="btn btn-info">edit</a>
                <form action="{{route('keahlian.destroy',$row->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin Menghapus Data ini ?')">
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