@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tabel Data Mahasiswa
                <a href="{{ route('tambah_mahasiswa') }}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <form class="form" method="get" action="{{ route('search_mahasiswa') }}">
                        <div class="form-group col-md-6 float-right">
                            <button type="submit" class="btn btn-success float-right">Cari</button>
                            <input type="text" name="search" class="form-control col-md-6 d-inline float-right" id="search" placeholder="Masukkan Nama">
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>NO</th>
                                <th>NAMA LENGKAP</th>
                                <th>NPM</th>
                                <th>TEMPAT, TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>TELEPON</th>
                                <th>JENIS KELAMIN</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($mahasiswa as $mhs)  
                            <tr>
                                <td>{{ $mhs->id }}</td>
                                <td>{{ $mhs->user->name }}</td>
                                <td>{{ $mhs->npm }}</td>
                                <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir  }}</td>
                                <td>{{ $mhs->alamat }}</td>
                                <td>{{ $mhs->telepon }}</td>
                                <td>{{ $mhs->gender }}</td>
                                <td>
                                    <a href="{{ route('edit_mahasiswa', $mhs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_mahasiswa', $mhs->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
