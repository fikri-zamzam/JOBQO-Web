@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin/jobs_type/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Kategori</label>
            <input type="text" class="form-control" name="namaCategories" required
                    placeholder="Nama Kategori" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" required
                    placeholder="Deskripsi" value="{{ $model->deskripsi }}" >
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit Perubahan</button>
            <a href="/jobs_type">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection