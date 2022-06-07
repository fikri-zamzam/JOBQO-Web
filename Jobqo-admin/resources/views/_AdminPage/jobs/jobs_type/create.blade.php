@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin/jobs_type') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Kategori</label>
            <input type="text" class="form-control" name="namaCategories" required
                    placeholder="Nama Kategori" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" required
                    placeholder="Deskripsi">
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="{{ url('admin/jobs_type') }}">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection