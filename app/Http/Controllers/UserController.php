<?php

namespace App\Http\Controllers;

use App\User;
use App\Matkul;
use App\Mahasiswa;
use App\Nilai;
use Illuminate\Http\Request;
use Alert;

class UserController extends Controller
{
    public function searchmatkul(Request $request)
    {
        $keyword = $request->search;
        $matkul = Matkul::where('nama_matkul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('matkul.index', compact('matkul'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchmahasiswa(Request $request)
    {
        $keyword = $request->search;
        $mahasiswa = Mahasiswa::join('users', 'users.id', '=', 'mahasiswa.user_id')
        ->where('users.name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('mahasiswa.index', compact('mahasiswa'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchnilai(Request $request)
    {
        $keyword = $request->search;
        $nilai = Nilai::join('mahasiswa', 'mahasiswa.id', '=', 'nilai.mahasiswa_id')
        ->join('matkul', 'matkul.id', '=', 'nilai.matkul_id')
        ->join('users', 'users.id', '=', 'mahasiswa.user_id')
        ->where('users.name', 'like', "%" . $keyword . "%")->orWhere('matkul.nama_matkul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('nilai.index', compact('nilai'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
