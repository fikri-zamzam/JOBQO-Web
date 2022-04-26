@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('jobs') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Pekerjaan</label>
            <input type="text" class="form-control" name="namaPekerjaan" required
                    placeholder="Nama Pekerjaan" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi Pekerjaan</label>
            <input type="text" class="form-control" name="deskripsi" required
                    placeholder="Deskripsi Pekerjaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Gaji</label>
            <input type="text" class="form-control" name="gaji" required
                    placeholder="Gaji">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Perusahaan</label>
            <input type="text" class="form-control" name="Perusahaan" required
                    placeholder="Perusahaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Kategori Pekerjaan</label>
            <input type="text" class="form-control" name="kategoriPekerjaan" required
                    placeholder="Kategori Pekerjaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Posisi Pekerjaan</label>
            <input type="text" class="form-control" name="posisiPekerjaan" required
                    placeholder="Posisi Pekerjaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Persyaratan Pekerjaan</label>
            <input type="text" class="form-control" name="persyaratanPekerjaan" required
                    placeholder="Persyaratan Pekerjaan">
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="/jobs">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection