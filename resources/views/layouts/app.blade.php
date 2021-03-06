<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PUSKESMAS SUKASUKA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.scss') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        main {
            width: 100%;
            padding: 20px;
            margin: 20px auto;
            background-color: ghostwhite;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/beranda') }}">
                PUSKAS
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @role('petugas')
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('puskesmas.index')}}">Data Puskesmas <span class="sr-only"></span></a>
                        </li>
                        {{--  <li class="nav-item active">
                            <a class="nav-link" href="{{route('pendaftar.index')}}">Pendaftar <span class="sr-only"></span></a>
                        </li>  --}}
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('layanan.index')}}">Layanan <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('galeri.index')}}">Galeri <span class="sr-only"></span></a>
                        </li>
                        @endrole
                        @role('admin')
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('users.index')}}">Data User <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('puskesmas.index')}}">Data Puskesmas <span class="sr-only"></span></a>
                        </li>
                        {{--  <li class="nav-item active">
                            <a class="nav-link" href="{{route('pendaftar.index')}}">Data Pendaftar <span class="sr-only"></span></a>
                        </li>  --}}
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('layanan.index')}}">Data Layanan <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('galeri.index')}}">Galeri <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('konfigurasi.index')}}">Konfigurasi Website <span class="sr-only"></span></a>
                        </li>
                        @endrole
                        @role('pendaftar')
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('puskesmas.index')}}">Data Puskesmas <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="info-kegiatan">Info Kegiatan <span class="sr-only"></span></a>
                        </li>
                        @endrole
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @role('pendaftar')
                                    <a class="dropdown-item" href="{{route('profil.index')}}">Profil</a>
                                    @endrole
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>fasttracklaravel</b> 1.0 &nbsp;
    </div>
    <strong>&nbsp; Copyright &copy;
        <script>
            document.write(new Date().getFullYear())
        </script>
        <a href="https://github.com/wahyualiff">Wahyu Alif</a>.</strong> All rights
    reserved.
</footer>
<br>
</html>
