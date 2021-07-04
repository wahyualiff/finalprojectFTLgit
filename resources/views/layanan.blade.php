@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Layanan Puskesmas Suka - Suka </h3>
        </div>
        <div class="card-body">
            <a href="{{route('layanan.create')}}">[+]Tambah Layanan</a>
            <table class="table table-bordered ">
                <tr>
                    <th>Judul Layanan</th>
                    <th>Isi Layanan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                @foreach($layanan as $lyn)
                <tr>
                    <td>{{$lyn->judul_layanan}}</td>
                    <td>{{$lyn->isi_layanan}}</td>
                    <td>{{$lyn->gambar}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('layanan.show', $lyn->id_layanan)}}" class="btn btn-primary m-1">Lihat</a>
                            <a href="{{route('layanan.edit', $lyn->id_layanan)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('layanan.destroy', $lyn->id_layanan)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Hapus</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection