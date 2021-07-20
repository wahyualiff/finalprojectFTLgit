<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Auth;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman utama galeri
        $user = Auth::user();
        if ($user->hasRole('petugas') or $user->hasRole('admin')) {
            // dapat mengakses data galeri
            $datagaleri = Galeri::all();
            return view('galeri', ['galeri' => $datagaleri]);
        } else {
            // dialihkan ke halaman beranda
            $datagaleri = Galeri::all();
            return view('beranda', ['galeri' => $datagaleri]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tambah data galeri
        return view('tambah_galeri');
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
        Galeri::create([
            'gambar' => $request->gambar,
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Detail galeri
        $galeri = Galeri::where('id', $id)->first();
        return view('detail_galeri', ['galeri' => $galeri]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Edit data galeri
        $datagaleri = Galeri::find($id);
        return view('edit_galeri', ['galeri' => $datagaleri]);
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
        // Proses edit data galeri
        $galeri = Galeri::find($id);
        $galeri->gambar = $request->gambar;
        $galeri->title = $request->title;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->save();

        return redirect()->route('galeri.index');
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
        $galeri = Galeri::find($id);
        $galeri->delete();

        return redirect()->route('galeri.index');
    }
}
