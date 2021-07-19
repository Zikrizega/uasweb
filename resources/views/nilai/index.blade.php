@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tabel Data Nilai
                <a href="{{ route('tambah_nilai') }}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <form class="form" method="get" action="{{ route('search_nilai') }}">
                        <div class="form-group col-md-6 float-right">
                            <button type="submit" class="btn btn-success float-right">Cari</button>
                            <input type="text" name="search" class="form-control col-md-6 d-inline float-right" id="search" placeholder="Masukkan Nama">
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>NO</th>
                                <th>NPM</th>
                                <th>NAMA LENGKAP</th>
                                <th>NAMA MATKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($nilai as $nl)  
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td>{{ $nl->mahasiswa->npm }}</td>
                                <td>{{ $nl->mahasiswa->user->name }}</td>
                                <td>{{ $nl->matkul->nama_matkul }}</td>
                                <td>{{ $nl->matkul->sks }}</td>
                                <td>{{ $nl->nilai }}</td>
                                <td>
                                    <a href="{{ route('edit_nilai', $nl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_nilai', $nl->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
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
