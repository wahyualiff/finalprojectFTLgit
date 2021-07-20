@extends('layouts.app')

@section('content')
<body>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('storage/s1.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('storage/jj1.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('storage/db.png')}}" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <hr>
    <main>
        <h1><center>Layanan</center></h1>
            <div class="container marketing">
                <div class="row">
                    @foreach($layanan as $lyn)
                    <div class="col-lg-4">
                        <img class="rounded-circle" src="{{ Storage::url('public/').$lyn->gambar }}" alt="" style="height: 250px; object-fit:contain; width:100%" >
                        <h3><center>{{$lyn->judul_layanan}}</h3>
                        <p>{{Str::limit($lyn->isi_layanan, 70) }}</p>
                        <a href="{{route('lihat.show', $lyn->id)}}" class="btn btn-primary m-1">Lihat</a>
                    </div>
                    @endforeach
                </div>
            </div>
        <br><br>
        <div class="album py-5 bg-light">
            <div class="container">
                @foreach($konfigurasi as $kon)
                <div class="row judul">
                    <div class="col-md-12 text-center">
                        <h1>Alamat Kami</h1>
                    </div>
                </div>
                <div class="row artikel">
                    
                    <div class="col-md-12">
                        <p style="text-align: center;">
                            {{--  <!-- Map dari Google Map -->  --}}
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8224625870707!2d106.93581061436238!3d-6.416852964539342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6994e3db9c3631%3A0xa8eba51fd54f10e3!2sPuskesmas%20Gunung%20Putri!5e0!3m2!1sid!2sid!4v1626767090926!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </p>
                    </div>
                </div>
        
                <div class="row artikel">
                    <div class="col-md-12">
                        <p>
                            <h4> {{$kon->namaweb}}</h4>
                            <h6>Anda dapat menghubungi kami melalui alamat dibawah ini:</h6>
                            <br><i class="fa fa-map-marker"></i> {{$kon->alamat}}
                            <br><i class="fa fa-phone"></i> {{$kon->telepon}}
                            <br><i class="fa fa-envelope"></i> {{$kon->email}}
                            <br><i class="fa fa-instagram"></i> {{$kon->instagram}}
                        </p>
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
@endsection