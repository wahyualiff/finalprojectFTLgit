<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Konfigurasi;
use App\Models\Pendaftar;

class HomeController extends Controller
{
    public function home()
    {
        $datalayanan = Layanan::all();
        $datakonfigurasi = Konfigurasi::all();
        return view('beranda', [
            'layanan' => $datalayanan,
            'konfigurasi' => $datakonfigurasi
        ]);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function galeri()
    {
        $datagaleri = Galeri::all();
        return view('info-kegiatan', ['galeri' => $datagaleri]);
    }

    public function pendaftar()
    {
        $datapendaftar = Pendaftar::all();
        return view('profil', ['pendaftar' => $datapendaftar]);
    }
}
