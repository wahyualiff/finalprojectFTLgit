@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail Pendaftar Vaksinisasi Puskesmas Suka Suka</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="col-5">No. KTP</h4>
                <h4 class="col">: {{$pendaftar->ktp}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Nama</h4>
                <h4 class="col">: {{$pendaftar->nama}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Tanggal Lahir</h4>
                <h4 class="col">: {{$pendaftar->tgl_lahir}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Alamat</h4>
                <h4 class="col">: {{$pendaftar->alamat}} </h4>
            </div>
            <hr>
            <a href="{{route('pendaftar.index')}}" class="btn btn-primary float-right">Kembali</a>
        </div>
    </div>
</div>
@endsection