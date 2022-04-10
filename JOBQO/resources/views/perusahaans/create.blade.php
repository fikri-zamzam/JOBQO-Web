@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('perusahaan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Perusahaan</label>
            <input type="text" class="form-control" name="namaPerusahaan" required
                    placeholder="Nama Perusahaan" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Bidang</label>
            <input type="text" class="form-control" name="bidangPerusahaan" required
                    placeholder="Bidang Perusahaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">No Telepon</label>
            <input type="text" class="form-control" name="notelpPerusahaan" required
                    placeholder="No Telp Perusahaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Alamat</label>
            <input type="text" class="form-control" name="alamatPerusahaan" required
                    placeholder="Alamat Perusahaan">
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