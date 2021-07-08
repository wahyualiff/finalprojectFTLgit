@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Layanan</h1>
        </div>
        <div class="card-body">
            <form action="{{route('layanan.update', $layanan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Judul Layanan <input type="text" name="judul_layanan" required value="{{$layanan->judul_layanan}}">
                    Isi Layanan <input type="text" name="isi_layanan" required value="{{$layanan->isi_layanan}}">
                    Gambar <input type="file" name="gambar" required value="{{$layanan->gambar}}" >
                </ul>
                <hr>
                <a href="{{route('layanan.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection