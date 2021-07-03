@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Data Pendaftar</h1>
        </div>
        <div class="card-body">
            <form action="{{route('pendaftar.update', $pendaftar->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    No. KTP <input type="number" name="ktp" required value="{{$pendaftar->ktp}}">
                    Nama <input type="text" name="nama" required value="{{$pendaftar->nama}}">
                    Tanggal Lahir <input type="date" name="tgl_lahir" required value="{{$pendaftar->tgl_lahir}}" >
                    Alamat <input type="text" name="alamat" required value="{{$pendaftar->alamat}}" >
                </ul>
                <hr>
                <a href="{{route('pendaftar.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection