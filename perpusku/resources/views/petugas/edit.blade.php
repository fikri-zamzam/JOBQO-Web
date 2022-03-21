@extends('style.main')


@section('container')

<div class="col-12">
    <form action="{{ url('petugas/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-4">
            <label for="exampleFormControlInput1">Nama Petugas</label>
            <input type="text" class="form-control" name="nama" value="{{ $model->nama_petugas }}" required
                    placeholder="Nama Petugas" value="">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Jabatan</label>
            <input type="text" class="form-control" value="{{ $model->jabatan }}" name="jabatan" required
                    placeholder="Jabatan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">No. Hp Petugas</label>
            <input type="text" class="form-control" name="hp" value="{{ $model->no_hp }}" required
                    placeholder="No. Hp Petugas">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Alamat Petugas</label>
            <input type="text" class="form-control" name="alamat" value="{{ $model->alamat_petugas }}" required
                    placeholder="Alamat Petugas">
        </div>
        <div class="form-group mt-4">
            <button class="btn btn-primary" type="submit" name="tambah">Simpan</button>
            <a href="/petugas">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection