<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Auth;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman utama pendaftar
        $user = Auth::user();
        if ($user->hasRole('petugas') or $user->hasRole('admin')) {
            // dapat mengakses data siswa
            $datapendaftar = Pendaftar::all();
            return view('index', ['pendaftar' => $datapendaftar]);
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
        // Tambah data pendaftar
        return view('tambah_pendaftar');
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
        Pendaftar::create([
            'ktp' => $request->ktp,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('pendaftar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Detail pendaftar
        $pendaftar = Pendaftar::where('id', $id)->first();
        return view('detail_pendaftar', ['pendaftar' => $pendaftar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Edit data pendaftar
        $datapendaftar = Pendaftar::find($id);
        return view('edit_pendaftar', ['pendaftar' => $datapendaftar]);
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
        // Proses edit data pendaftar
        $pendaftar = Pendaftar::find($id);
        $pendaftar->ktp = $request->ktp;
        $pendaftar->nama = $request->nama;
        $pendaftar->tgl_lahir = $request->tgl_lahir;
        $pendaftar->alamat = $request->alamat;
        $pendaftar->save();

        return redirect()->route('pendaftar.index');
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
        $pendaftar = Pendaftar::find($id);
        $pendaftar->delete();

        return redirect()->route('pendaftar.index');
    }
}
