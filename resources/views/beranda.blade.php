@extends('layouts.app')

@section('content')

<body>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('storage/sl2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('storage/slider1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('storage/sl4.jpg')}}" class="d-block w-100" alt="...">
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
                @foreach($layanan as $lyn)
                <div class="row">
                    <div class="col-lg-4">
                        <img class="rounded-circle" src="{{asset('$lyn->gambar')}}" alt="" style="height: 250px; object-fit:contain; width:100%" >
                        <h3><center>{{$lyn->judul_layanan}}</h3>
                        <br>
                        <p>{{$lyn->isi_layanan}}</p>
                        <br> <br>
                        <a href="{{route('layanan.show', $lyn->id)}}" class="btn btn-primary m-1">Lihat</a>
                    </div>
                </div>
            </div>
                @endforeach
        <br> <br>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Alamat Kami</h1>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.620026211232!2d106.89569561436262!3d-6.442812264793015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eac62795e887%3A0x18619170c520109d!2sPuskesmas%20Bojong%20Nangka!5e0!3m2!1sid!2sid!4v1625472824314!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
    </main>
</body>
@endsection