@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('update_mahasiswa', $mahasiswa->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="user_id">Nama User</label>
                                <select class="form-control" name="user_id" required="required">
                                <option value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->user_id }}" selected readonly>{{ is_null ($mahasiswa) ? '' : $mahasiswa->user->name }}</option>
                                @foreach ($user as $usr)
                                <option value="{{ $usr->id }}">{{ $usr->name }}</option>
                                @endforeach
                                </select><br>

                                <label for="npm">NPM</label>
                                <input type="number" min="1" name="npm" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->npm }}"><br>
                            </div>
                            <div class="col">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}"><br>

                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}"><br>
                            </div>
                            <div class="col">
                                <label for="telepon">Telepon</label>
                                <input type="number" min="1" name="telepon" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->telepon }}"><br>

                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-control" name="gender" required="required">
                                <option value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->gender }}" selected readonly>{{ is_null ($mahasiswa) ? '' : $mahasiswa->gender }}</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                                </select><br>
                            </div>
                        </div>
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->alamat }}">
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-secondary">Batal</a>
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
