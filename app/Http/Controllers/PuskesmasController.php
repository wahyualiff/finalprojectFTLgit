<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puskesmas;
use Illuminate\Support\Facades\Auth;

class PuskesmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapuskesmas = Puskesmas::all();
        return view('puskesmas', ['puskesmas' => $datapuskesmas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tambah data puskesmas
        return view('tambah_puskesmas');
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
        Puskesmas::create([
            'image' => $request->image,
            'nama' => $request->nama,
            'email' => $request->email,
            'instagram' => $request->instagram,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'website' => $request->website,
            // 'map' => $request->map,
            'konten' => $request->konten,
        ]);
        return redirect()->route('puskesmas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Detail puskesmas
        $puskesmas = Puskesmas::where('id', $id)->first();
        return view('detail_puskesmas', ['puskesmas' => $puskesmas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Edit data puskesmas
        $datapuskesmas = Puskesmas::find($id);
        return view('edit_puskesmas', ['puskesmas' => $datapuskesmas]);
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
        // Proses edit data puskesmas
        $puskesmas = Puskesmas::find($id);
        $puskesmas->image = $request->image;
        $puskesmas->nama = $request->nama;
        $puskesmas->email = $request->email;
        $puskesmas->instagram = $request->instagram;
        $puskesmas->telepon = $request->telepon;
        $puskesmas->alamat = $request->alamat;
        $puskesmas->website = $request->website;
        // $puskesmas->map = $request->map;
        $puskesmas->konten = $request->konten;
        $puskesmas->save();

        return redirect()->route('puskesmas.index');
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
        $puskesmas = Puskesmas::find($id);
        $puskesmas->delete();

        return redirect()->route('puskesmas.index');
    }
}
