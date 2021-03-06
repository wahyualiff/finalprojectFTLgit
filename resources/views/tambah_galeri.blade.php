@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Galeri</h1>
            <form action="{{route('galeri.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Gambar <input type="file" name="gambar" required>
                    Judul <input type="text" name="title" required>
                    Deskripsi <textarea name="deskripsi" required></textarea>
                </ul>
                <hr>
                <a href="{{route('galeri.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection