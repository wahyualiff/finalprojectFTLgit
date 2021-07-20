@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Konfigurasi Website</h1>
        </div>
        <div class="card-body">
            <form action="{{route('konfigurasi.update', $konfigurasi->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama Website <input type="text" name="namaweb" required value="{{$konfigurasi->namaweb}}">
                    Email <input type="email" name="email" required value="{{$konfigurasi->email}}">
                    Instagram <input type="text" name="instagram" required value="{{$konfigurasi->instagram}}">
                    Telepon <input type="number" name="telepon" required value="{{$konfigurasi->telepon}}">
                    Alamat <input type="text" name="alamat" required value="{{$konfigurasi->alamat}}">
                    {{--  Map <input type="text" name="map" required value="{{$konfigurasi->map}}">  --}}
                </ul>
                <hr>
                <a href="{{route('konfigurasi.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection