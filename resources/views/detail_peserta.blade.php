@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail Peserta Vaksinisasi Puskesmas Suka Suka</h3>
        </div>
        <div class="card-body">
            <div class="row ml-2">
                <h4 class="col-4">No. KTP</h4>
                <h4>: {{$peserta->ktp}} </h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Nama</h4>
                <h4>: {{$peserta->nama}} </h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Tanggal Lahir</h4>
                <h4>: {{$peserta->tgl_lahir}} </h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Alamat</h4>
                <h4>: {{$peserta->alamat}} </h4>
            </div>
            <a href="{{route('peserta.index')}}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection