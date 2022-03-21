@extends('style.main')


@section('container')

<div class="col-12">
    <form action="{{ url('petugas') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-4">
            {{-- <input type="hidden" class="form-control" name="id"
                    placeholder="id"> --}}
        </div>
        <div class="form-group mt-4">
            <label for="exampleFormControlInput1">Nama Petugas</label>
            <input type="text" class="form-control" name="nama" required
                    placeholder="Nama Petugas">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" required
                    placeholder="Jabatan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">No. Hp Petugas</label>
            <input type="text" class="form-control" name="hp" required
                    placeholder="No. Hp Petugas">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Alamat Petugas</label>
            <input type="text" class="form-control" name="alamat" required
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