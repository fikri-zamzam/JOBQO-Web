@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin_type') }}" method="POST" enctype="multipart/form-data">
        @csrf
       
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Jenis admin</label>
            <input type="text" class="form-control" name="jenis_admin" required
                    placeholder="jenis admin">
        </div>
        <div class="form-group mt-2">
            <label for="desk_id">Deskripsi Tugas</label><br>
            <textarea class="form-control" name="deskripsi" id="desk_id" >

            </textarea>
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="/">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection