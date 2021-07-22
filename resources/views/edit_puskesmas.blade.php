@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Data Puskesmas</h1>
        </div>
        <div class="card-body">
            <form action="{{route('puskesmas.update', $puskesmas->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Gambar <input type="file" name="image" required value="{{$puskesmas->image}}" >
                    Nama Puskesmas <input type="text" name="nama" required value="{{$puskesmas->nama}}">
                    Email <input type="email" name="email" required value="{{$puskesmas->email}}">
                    Alamat <input type="text" name="alamat" required value="{{$puskesmas->alamat}}">
                    Instagram <input type="text" name="instagram" value="{{$puskesmas->instagram}}">
                    Telepon <input type="number" name="telepon" required value="{{$puskesmas->telepon}}">
                    Website <input type="text" name="website"  value="{{$puskesmas->website}}">
                    {{--  Map <input type="text" name="map" required value="{{$puskesmas->map}}">  --}}
                    Isi <textarea name="konten" required value="{{$puskesmas->konten}}"></textarea>
                </ul>
                <hr>
                <a href="{{route('puskesmas.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection