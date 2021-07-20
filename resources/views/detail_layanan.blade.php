@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail Layanan Puskesmas Suka Suka</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="col text-center"><img src="{{ Storage::url('public/').$layanan->gambar }}" style="width: 300px" alt=""></h4>
            </div>
            <div class="row">
                <h4 class="col"><center>{{$layanan->judul_layanan}}</center> </h4>
            </div>
            <div class="row">
                <p class="col" style="text-align: justify;">{{$layanan->isi_layanan}} </p>
            </div>
            <hr>
            @role('admin')
            <a href="{{route('layanan.index')}}" class="btn btn-primary float-right" >Kembali</a>
            @endrole
            @role('petugas')
            <a href="{{route('layanan.index')}}" class="btn btn-primary float-right" >Kembali</a>
            @endrole
            @role('pendaftar')
            <a href="{{route('beranda')}}" class="btn btn-primary float-right" >Kembali</a>
            @endrole
        </div>
    </div>
</div>
@endsection