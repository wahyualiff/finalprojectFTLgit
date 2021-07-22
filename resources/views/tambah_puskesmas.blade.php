@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Puskesmas</h1>
            <form action="{{route('puskesmas.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Gambar <input type="file" name="image" required>
                    Nama Puskesmas <input type="text" name="nama" required>
                    Email <input type="email" name="email" required>
                    Alamat <textarea type="alamat" name="alamat" required></textarea>
                    Instagram <input type="instagram" name="instagram">
                    Telepon <input type="number" name="telepon" required>
                    Website <input type="website" name="website">
                    {{--  Map <input type="text" name="map" required value="{{$puskesmas->map}}">  --}}
                    Isi <textarea name="konten" required></textarea>
                </ul>
                <hr>
                <a href="{{route('puskesmas.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>           
            {{--  <script>
                CKEDITOR.replace( 'isi_puskesmas' );
            </script>  --}}
        </div>
    </div>
</div>
@endsection