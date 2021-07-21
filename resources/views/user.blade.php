@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data User</h3>
        </div>
        <div class="card-body">
            {{--  <a href="{{route('users.create')}}">[+]Tambah Data User</a>  --}}
            <table class="table table-bordered ">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
                @foreach($users as $us)
                <tr>
                    <td>{{$us->name}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->role}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('users.show', $us->id)}}" class="btn btn-primary m-1">Lihat</a>
                            <form action="{{route('users.destroy', $us->id)}}" method="POST">
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