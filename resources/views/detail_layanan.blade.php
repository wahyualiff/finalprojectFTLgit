@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail Layanan Puskesmas Suka Suka</h3>
        </div>
        <div class="card-body">
            <div class="row ml-2">
                <h4 class="col-4">Judul Layanan</h4>
                <h4>: {{$layanan->judul_layanan}} </h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Isi Layanan</h4>
                <h4>: {{$layanan->isi_layanan}} </h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Gambar</h4>
                <h4>: {{$layanan->gambar}} </h4>
            </div>
            <a href="{{route('layanan.index')}}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection