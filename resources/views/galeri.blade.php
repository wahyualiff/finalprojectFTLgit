@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Galeri Puskesmas Suka - Suka </h3>
        </div>
        <div class="card-body">
            <a href="{{route('galeri.create')}}">[+]Tambah Galeri</a>
            <table class="table table-bordered ">
                <tr>
                    <th style="text-align: center;">Gambar</th>
                    <th style="text-align: center;">Deskripsi</th>
                    <th style="text-align: center;">Posisi</th>
                    <th>Aksi</th>
                </tr>
                @foreach($galeri as $g)
                <tr>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/').$g->gambar }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{$g->deskripsi}}</td>
                    <td>{{$g->posisi}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('galeri.edit', $g->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('galeri.destroy', $g->id)}}" method="POST">
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