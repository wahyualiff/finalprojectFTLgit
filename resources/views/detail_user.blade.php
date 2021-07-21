@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail User</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="col-5">Nama</h4>
                <h4 class="col">: {{$user->name}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Email</h4>
                <h4 class="col">: {{$user->email}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Role</h4>
                <h4 class="col">: {{$user->role}} </h4>
            </div>
            <hr>
            <a href="{{route('users.index')}}" class="btn btn-primary float-right">Kembali</a>
        </div>
    </div>
</div>
@endsection