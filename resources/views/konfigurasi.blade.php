@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Konfigurasi Website </h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered ">
                <tr>
                    <th style="text-align: center;">Nama Website</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">Instagram</th>
                    <th style="text-align: center;">Telepon</th>
                    <th style="text-align: center;">Alamat</th>
                    {{--  <th style="text-align: center;">Map</th>  --}}
                    <th style="text-align: center;">Aksi</th>
                </tr>
                @foreach($konfigurasi as $kon)
                <tr>
                    <td>{{$kon->namaweb}}</td>
                    <td>{{$kon->email}}</td>
                    <td>{{$kon->instagram}}</td>
                    <td>{{$kon->telepon}}</td>
                    <td>{{$kon->alamat}}</td>
                    {{--  <td>{{$kon->map}}</td>  --}}
                    <td>
                        <ul class="nav">
                            <a href="{{route('konfigurasi.edit', $kon->id)}}" class="btn btn-warning m-1">Edit</a>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection