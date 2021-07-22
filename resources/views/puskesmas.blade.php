@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>@role('admin') Data @endrole
                @role('petugas') Data @endrole
                @role('pendaftar') Daftar @endrole
                Puskesmas Daerah Gunung Putri Siap Vaksinasi </h3>
        </div>
        <div class="card-body">
        <a href="{{route('puskesmas.create')}}">[+]Tambah Puskesmas</a>
            <table class="table table-bordered ">
                <tr>
                    {{--  <th style="text-align: center;">Gambar</th>  --}}
                    <th style="text-align: center;">Puskesmas</th>
                    <th style="text-align: center;">Alamat</th>
                    <th style="text-align: center;">Email</th>
                    {{--  <th style="text-align: center;">Instagram</th>  --}}
                    <th style="text-align: center;">Telepon</th>
                    <th style="text-align: center;">Website</th>
                    {{--  <th style="text-align: center;">Map</th>  --}}
                    <th style="text-align: center;">Isi</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
                @foreach($puskesmas as $pkm)
                <tr>
                    {{--  <td>{{$pkm->image}}</td>  --}}
                    <td>{{$pkm->nama}}</td>
                    <td>{{$pkm->alamat}}</td>
                    <td>{{$pkm->email}}</td>
                    {{--  <td>{{$pkm->instagram}}</td>  --}}
                    <td>{{$pkm->telepon}}</td>
                    <td>{{$pkm->website}}</td>
                    {{--  <td>{{$pkm->map}}</td>  --}}
                    <td>{{$pkm->konten}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('puskesmas.show', $pkm->id)}}" class="btn btn-primary m-1">Lihat</a>
                            @role('admin')
                            <a href="{{route('puskesmas.edit', $pkm->id)}}" class="btn btn-warning m-1">Edit</a>
                            @endrole
                            @role('petugas')
                            <a href="{{route('puskesmas.edit', $pkm->id)}}" class="btn btn-warning m-1">Edit</a>
                            @endrole
                            @role('admin')
                            <form action="{{route('puskesmas.destroy', $pkm->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Hapus</button>
                            </form>
                            @endrole
                            @role('petugas')
                            <form action="{{route('puskesmas.destroy', $pkm->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Hapus</button>
                            </form>
                            @endrole
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection