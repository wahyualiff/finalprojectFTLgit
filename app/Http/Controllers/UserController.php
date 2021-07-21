<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman utama user
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            // dapat mengakses data siswa
            $datauser = User::all();
            return view('user', ['users' => $datauser]);
        } else {
            // dialihkan ke halaman beranda
            return redirect()->route('user');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // // Tambah data user
        // return view('tambah_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // // Proses input data
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'role' => $request->role,
        // ]);
        // return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Detail user
        $user = User::where('id', $id)->first();
        return view('detail_user', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // // Edit data user
        // $datauser = User::find($id);
        // return view('edit_user', ['user' => $datauser]);
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
        // // Proses edit data user
        // $user = User::find($id);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->role = $request->role;
        // $user->save();

        // return redirect()->route('user.index');
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
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index');
    }
}
