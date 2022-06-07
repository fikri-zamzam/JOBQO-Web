@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin/companies_sector/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Bidang Perusahaan</label>
            <input type="text" class="form-control" name="nameSector" required
                    placeholder="Bidang Perusahaan" value="{{ $model->nameSector }}" >
        </div>
        @error('nameSector')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" value="{{ $model->deskripsi }}" required
                    placeholder="deskripsi" >
        </div>
        @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit Perubahan</button>
            <a href="{{ url('admin/companies_sector') }}">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection