@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Data Matkul</div>

                <div class="card-body">
                    <form action="{{ route('update_matkul', $matkul->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <label for="kode_matkul">Kode Matkul</label>
                                <input type="text" name="kode_matkul" class="form-control" value="{{ is_null ($matkul) ? '' : $matkul->kode_matkul }}">
                            </div>
                            <div class="col">
                                <label for="nama_matkul">Nama Matkul</label>
                                <input type="text" name="nama_matkul" class="form-control" value="{{ is_null ($matkul) ? '' : $matkul->nama_matkul }}">
                            </div>
                            <div class="col">
                                <label for="sks">SKS</label>
                                <input type="number" min="1" max="3" name="sks" class="form-control" value="{{ is_null ($matkul) ? '' : $matkul->sks }}">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <a href="{{ route('matkul') }}" class="btn btn-md btn-secondary">Batal</a>
                                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
