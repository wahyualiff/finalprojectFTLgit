<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman utama Peserta
        $datapeserta = Peserta::all();
        return view('index', ['peserta' => $datapeserta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tambah data peserta
        return view('tambah_peserta');
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
        Peserta::create([
            'ktp' => $request->ktp,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('peserta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Detail Peserta
        $peserta = Peserta::where('id', $id)->first();
        return view('detail_peserta', ['peserta' => $peserta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Edit data peserta
        $datapeserta = Peserta::find($id);
        return view('edit_peserta', ['peserta' => $datapeserta]);
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
        // Proses edit data peserta
        $peserta = Peserta::find($id);
        $peserta->ktp = $request->ktp;
        $peserta->nama = $request->nama;
        $peserta->tgl_lahir = $request->tgl_lahir;
        $peserta->alamat = $request->alamat;
        $peserta->save();

        return redirect()->route('peserta.index');
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
        $peserta = Peserta::find($id);
        $peserta->delete();

        return redirect()->route('peserta.index');
    }
}
