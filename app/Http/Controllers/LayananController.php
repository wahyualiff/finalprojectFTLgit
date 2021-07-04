<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman utama layanan
        $user = Auth::user();
        if ($user->hasRole('petugas')) {
            // dapat mengakses data layanan
            $datalayanan = Layanan::all();
            return view('index', ['layanan' => $datalayanan]);
        } else {
            // dialihkan ke halaman beranda
            return redirect()->route('beranda');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tambah data layanan
        return view('tambah_layanan');
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
        Layanan::create([
            'judul_layanan' => $request->judul_layanan,
            'isi_layanan' => $request->isi_layanan,
            'gambar' => $request->gambar,
        ]);
        return redirect()->route('layanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_layanan)
    {
        // Detail layanan
        $layanan = Layanan::where('id_layanan', $id_layanan)->first();
        return view('detail_layanan', ['layanan' => $layanan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_layanan)
    {
        // Edit data layanan
        $datalayanan = Layanan::find($id_layanan);
        return view('edit_layanan', ['layanan' => $datalayanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_layanan)
    {
        // Proses edit data layanan
        $layanan = Layanan::find($id_layanan);
        $layanan->judul_layanan = $request->judul_layanan;
        $layanan->isi_layanan = $request->isi_layanan;
        $layanan->gambar = $request->gambar;
        $layanan->save();

        return redirect()->route('layanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_layanan)
    {
        // proses hapus data USER
        $layanan = Layanan::find($id_layanan);
        $layanan->delete();

        return redirect()->route('layanan.index');
    }
}
