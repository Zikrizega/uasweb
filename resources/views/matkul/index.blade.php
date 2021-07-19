@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tabel Data Matkul
                <a href="{{ route('tambah_matkul') }}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <form class="form" method="get" action="{{ route('search_matkul') }}">
                        <div class="form-group col-md-6 float-right">
                            <button type="submit" class="btn btn-success float-right">Cari</button>
                            <input type="text" name="search" class="form-control col-md-6 d-inline float-right" id="search" placeholder="Masukkan Nama">
                        </div>
                    </form>

                    <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                            <tr>
                                <th>NO</th>
                                <th>KODE MATKUL</th>
                                <th>NAMA MATKUL</th>
                                <th>SKS</th>
                                <th>AKSI</th>
                            </tr>
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($matkul as $mtk)  
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td>{{ $mtk->kode_matkul }}</td>
                                <td>{{ $mtk->nama_matkul }}</td>
                                <td>{{ $mtk->sks }}</td>
                                <td>
                                    <a href="{{ route('edit_matkul', $mtk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_matkul', $mtk->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
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
