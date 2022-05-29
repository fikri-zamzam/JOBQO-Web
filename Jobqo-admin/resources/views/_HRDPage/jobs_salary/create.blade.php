@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('hrd/jobs_salary') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Range gaji</label>
            <input type="text" class="form-control" name="range_salary" required
                    placeholder="Contoh : 2500000 - 5000000" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" required
                    placeholder="Deskripsi">
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="/jobs_type">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection