@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail Layanan Puskesmas Suka Suka</h3>
        </div>
        <div class="card-body">
            <div class="row ">
                <h4 class="col-5">Judul Layanan</h4>
                <h4 class="col">: {{$layanan->judul_layanan}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Isi Layanan</h4>
                <h4 class="col">: {{$layanan->isi_layanan}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Gambar</h4>
                <h4 class="col"> :<img src="{{asset($layanan->gambar)}}" alt=""></h4>
            </div>
            <hr>
            <a href="{{route('layanan.index')}}" class="btn btn-primary float-right" >Kembali</a>
        </div>
    </div>
</div>
@endsection