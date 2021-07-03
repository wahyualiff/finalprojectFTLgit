@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Pendaftar Vaksinisasi</h3>
        </div>
        <div class="card-body">
            <a href="{{route('pendaftar.create')}}">[+]Tambah Data Pendaftar</a>
            <table class="table table-bordered ">
                <tr>
                    <th>No. KTP</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                @foreach($pendaftar as $pdt)
                <tr>
                    <td>{{$pdt->ktp}}</td>
                    <td>{{$pdt->nama}}</td>
                    <td>{{$pdt->tgl_lahir}}</td>
                    <td>{{$pdt->alamat}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('pendaftar.show', $pdt->id)}}" class="btn btn-primary m-1">Lihat</a>
                            <a href="{{route('pendaftar.edit', $pdt->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('pendaftar.destroy', $pdt->id)}}" method="POST">
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