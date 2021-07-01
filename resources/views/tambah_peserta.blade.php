@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Data Peserta</h1>
            <form action="{{route('peserta.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    No. KTP <input type="number" name="ktp" required>
                    Nama <input type="text" name="nama" required>
                    Tanggal Lahir <input type="date" name="tgl_lahir" required>
                    Alamat <input type="text" name="alamat" required>
                </ul>
                <hr>
                <a href="{{route('peserta.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection