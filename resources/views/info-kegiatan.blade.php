@extends('layouts.app')

@section('content')
<h1><center>Info Kegiatan</center></h1>
<div class="card mb-3">
    @foreach($galeri as $g)
    <br>
    <center><img src="{{ Storage::url('public/').$g->gambar }}" class="card-img-top" alt="..." style="height: 500px; width:70%; "></center>
    <div class="card-body">
        <h5 class="card-title">{{$g->title}}</h5>
        <p class="card-text">{{$g->deskripsi}}</p>
        <p class="card-text"><small class="text-muted">Updated {{$g->updated_at}}</small></p>
    </div>
    <br><br>
    @endforeach
</div>
<br><br>
@endsection