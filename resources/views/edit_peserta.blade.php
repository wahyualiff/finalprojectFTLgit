@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Data Peserta</h1>
        </div>
        <div class="card-body">
            <form action="{{route('peserta.update', $peserta->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    No. KTP <input type="number" name="ktp" required value="{{$peserta->ktp}}">
                    Nama <input type="text" name="nama" required value="{{$peserta->nama}}">
                    Tanggal Lahir <input type="date" name="tgl_lahir" required value="{{$peserta->tgl_lahir}}" >
                    Alamat <input type="text" name="alamat" required value="{{$peserta->alamat}}" >
                </ul>
                <hr>
                <a href="{{route('peserta.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection