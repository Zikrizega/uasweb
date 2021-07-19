<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
use Alert;

class MahasiswaController extends Controller
{
    

    public function index()
    {
        $mahasiswa = Mahasiswa::with('user')->get(); //select * from mahasiswa
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $user = User::all(); //select * from mahasiswa
        return view('mahasiswa.create', compact('user'));
    }

    public function store(Request $request){
        Mahasiswa::create($request->all());
        toast('Sukses! Berhasil menyimpan data.','success');
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $user = User::all(); //select * from mahasiswa
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa', 'user'));
    }

    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Sukses! Berhasil mengedit data.','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Sukses! Berhasil menghapus data.','success');
        return redirect()->route('mahasiswa');
    }
}

