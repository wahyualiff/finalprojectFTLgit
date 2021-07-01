@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Peserta Vaksinisasi</h3>
        </div>
        <div class="card-body">
            <a href="{{route('peserta.create')}}">[+]Tambah Data Peserta</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No. KTP</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                @foreach($peserta as $pst)
                <tr>
                    <td>{{$pst->ktp}}</td>
                    <td>{{$pst->nama}}</td>
                    <td>{{$pst->tgl_lahir}}</td>
                    <td>{{$pst->alamat}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('peserta.show', $pst->id)}}" class="btn btn-primary m-1">Lihat</a>
                            <a href="{{route('peserta.edit', $pst->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('peserta.destroy', $pst->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Hapus</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection