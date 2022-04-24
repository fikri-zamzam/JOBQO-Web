@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('jobs_position/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Posisi</label>
            <input type="text" class="form-control" name="namaPosition" required
                    placeholder="Nama Posisi" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" required
                    placeholder="Deskripsi" value="{{ $model->deskripsi }}" >
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit User</button>
            <a href="/jobs_position">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection