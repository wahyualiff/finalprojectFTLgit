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
                        <a href="{{route('layanan.show', $lyn->id)}}" class="btn btn-primary m-1">Lihat</a>
                    </div>
                    @endforeach
                </div>
            </div>
        <br><br>
        <div class="row">
            <h1><center>Alamat Kami</center></h1>
            <div class="col float-left">
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.620026211232!2d106.89569561436262!3d-6.442812264793015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eac62795e887%3A0x18619170c520109d!2sPuskesmas%20Bojong%20Nangka!5e0!3m2!1sid!2sid!4v1625472824314!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
                <div class="col">
                    <br><br>
                    <p><i class="fa fa-instagram"></i> Instagram : @puskas</p> 
                    <p><i class="fa fa-facebook"></i> Facebook : Puskesmas Desa Suka Suka</p>
                    <p><i class="fa fa-whatsapp"></i> Telp : 087778397596</p> 
                </div>
            </div>
    </main>
</body>
<footer class="footer bg-dark text-white" style="height: 250px; padding: 50px;">
    <div class="row">
        <div class="col"><br>Made by Muhamad Wahyu Alif &middot;
            <a href="#">Privacy</a> &middot;
            <a href="#">Terms</a>
        </div>
        <br>
        <div class="col" align="center">
            <h4>Kontak saya</h4>
            <br>
                <p><i class="fa fa-instagram"></i> Instagram : @wahyualif__</p> 
                <p><i class="fa fa-facebook"></i> Facebook : Muhamad Wahyu Alif</p>
                <p><i class="fa fa-whatsapp"></i> 087778397596</p> 
        </div>
    </div>
</footer>
@endsection