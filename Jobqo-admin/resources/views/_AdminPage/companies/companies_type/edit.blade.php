@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin/companies_type/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Jenis Perusahaan</label>
            <input type="text" class="form-control" name="nameType" required
                    placeholder="Jenis Perusahaan" value="{{ $model->nameType }}" >
        </div>
        @error('nameType')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" required
                    placeholder="deskripsi" value="{{ $model->deskripsi }}" >
        </div>
        @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit User</button>
            <a href="/companies_type">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection