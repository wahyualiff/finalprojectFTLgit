@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Layanan</h1>
            <form action="{{route('layanan.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Judul Layanan <input type="text" name="judul_layanan" required>
                    Isi Layanan <textarea type="isi_layanan" name="isi_layanan" required></textarea>
                    Gambar <input type="file" name="gambar" required>
                </ul>
                <hr>
                <a href="{{route('layanan.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection