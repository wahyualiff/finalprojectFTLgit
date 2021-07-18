@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Galeri</h1>
        </div>
        <div class="card-body">
            <form action="{{route('galeri.update', $galeri->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Gambar <input type="file" name="gambar" required value="{{$galeri->gambar}}" >
                    Deskripsi <input type="text" name="deskripsi" required value="{{$galeri->deskripsi}}">
                    Posisi <input type="text" name="posisi" required value="{{$galeri->posisi}}">
                </ul>
                <hr>
                <a href="{{route('galeri.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection