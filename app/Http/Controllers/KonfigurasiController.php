<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;
use Illuminate\Support\Facades\Auth;

class KonfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman utama konfigurasi
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            // dapat mengakses data konfigurasi
            $datakonfigurasi = Konfigurasi::all();
            return view('konfigurasi', ['konfigurasi' => $datakonfigurasi]);
        } else {
            // dialihkan ke halaman beranda
            $datakonfigurasi = Konfigurasi::all();
            return view('beranda', ['konfigurasi' => $datakonfigurasi]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tambah data konfigurasi
        return view('tambah_konfigurasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Proses input data
        Konfigurasi::create([
            'namaweb' => $request->namaweb,
            'email' => $request->email,
            'instagram' => $request->instagram,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            // 'map' => $request->map,
        ]);
        return redirect()->route('konfigurasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Detail konfigurasi
        $konfigurasi = Konfigurasi::where('id', $id)->first();
        return view('detail_konfigurasi', ['konfigurasi' => $konfigurasi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Edit data konfigurasi
        $datakonfigurasi = Konfigurasi::find($id);
        return view('edit_konfigurasi', ['konfigurasi' => $datakonfigurasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Proses edit data konfigurasi
        $konfigurasi = Konfigurasi::find($id);
        $konfigurasi->namaweb = $request->namaweb;
        $konfigurasi->email = $request->email;
        $konfigurasi->instagram = $request->instagram;
        $konfigurasi->telepon = $request->telepon;
        $konfigurasi->alamat = $request->alamat;
        // $konfigurasi->map = $request->map;
        $konfigurasi->save();

        return redirect()->route('konfigurasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // proses hapus data USER
        $konfigurasi = Konfigurasi::find($id);
        $konfigurasi->delete();

        return redirect()->route('konfigurasi.index');
    }
}
