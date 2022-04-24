@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('companies_type/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Jenis Perusahaan</label>
            <input type="text" class="form-control" name="jenisPerusahaan" required
                    placeholder="Jenis Perusahaan" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit User</button>
            <a href="/companies_type">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection