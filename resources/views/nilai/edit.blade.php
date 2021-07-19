@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Data Nilai</div>

                <div class="card-body">
                    <form action="{{ route('update_nilai', $nilai->id) }}" method="post">
                    @csrf
                        <div class="form-group">

                                <label for="matkul_id">Nama Matkul</label>
                                <select class="form-control" name="matkul_id" required="required">
                                <option value="{{ is_null ($nilai) ? '' : $nilai->matkul_id }}" selected readonly>{{ is_null ($nilai) ? '' : $nilai->matkul->nama_matkul }}</option>
                                @foreach ($matkul as $mk)
                                <option value="{{ $mk->id }}">{{ $mk->nama_matkul }}</option>
                                @endforeach
                                </select><br>

                                <label for="mahasiswa_id">Nama Mahasiswa</label>
                                <select class="form-control" name="mahasiswa_id" required="required">
                                <option value="{{ is_null ($nilai) ? '' : $nilai->mahasiswa_id }}" selected readonly>{{ is_null ($nilai) ? '' : $nilai->mahasiswa->user->name }}</option>
                                @foreach ($mahasiswa as $mhs)
                                <option value="{{ $mhs->id }}">{{ $mhs->user->name }}</option>
                                @endforeach
                                </select><br>

                                <label for="nilai">Nilai</label>
                                <input type="number" min="0" max="100" name="nilai" class="form-control" value="{{ is_null ($nilai) ? '' : $nilai->nilai }}"><br>

                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <a href="{{ route('nilai') }}" class="btn btn-md btn-secondary">Batal</a>
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
