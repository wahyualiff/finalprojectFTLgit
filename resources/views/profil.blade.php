@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Profil</h3>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered ">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>{{ Auth::user()->name }}</td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection