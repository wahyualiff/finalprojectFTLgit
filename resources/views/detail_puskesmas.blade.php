@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
            <div class="card mb-3">
                <h1 style="text-align: center;">Detail Puskesmas</h1>
                <br>
                <center><img src="{{ Storage::url('public/').$puskesmas->image }}" class="card-img-top" alt="..." style="height: 500px; width:70%; "></center>
                <div class="card-body">
                    <h3 class="card-title">{{$puskesmas->nama}}</h3>
                    <p class="card-text">{{$puskesmas->konten}}</p>
                    <br><i class="fa fa-map-marker"></i> {{$puskesmas->alamat}}
                    <br><i class="fa fa-phone"></i> {{$puskesmas->telepon}}
                    <br><i class="fa fa-envelope"></i> {{$puskesmas->email}}
                    <br><i class="fa fa-globe"></i> {{$puskesmas->website}}
                <hr>
            @role('admin')
            <a href="{{route('puskesmas.index')}}" class="btn btn-primary float-right" >Kembali</a>
            @endrole
            @role('petugas')
            <a href="{{route('puskesmas.index')}}" class="btn btn-primary float-right" >Kembali</a>
            @endrole
            @role('pendaftar')
            <a href="{{route('puskesmas.index')}}" class="btn btn-primary float-right" >Kembali</a>
            @endrole
            
        </div>
        </div>
    </div>
@endsection