@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('companies/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Perusahaan</label>
            <input type="text" class="form-control" name="namaPerusahaan" required
                    placeholder="Nama Perusahaan" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Alamat Perusahaan</label>
            <input type="text" class="form-control" name="alamat" required
                    placeholder="Alamat Perusahaan" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Kode Pos</label>
            <input type="text" class="form-control" name="kodePos" required
                    placeholder="Kode Pos" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email Perusahaan</label>
            <input type="text" class="form-control" name="email" required
                    placeholder="Email Perusahaan" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Kontak Perusahaan</label>
            <input type="text" class="form-control" name="contact" required
                    placeholder="Kontak Perusahaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Izin Usaha</label>
            <input type="text" class="form-control" name="izinUsaha" required
                    placeholder="Izin Usaha" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Logo Perusahaan</label>
            <input type="text" class="form-control" name="imgLogo" required
                    placeholder="Logo Perusahaan" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Bidang Perusahaan</label>
            <input type="text" class="form-control" name="bidangPerusahaan" required
                    placeholder="Bidang Perusahaan" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Jenis Perusahaan</label>
            <input type="text" class="form-control" name="jenisPerusahaan" required
                    placeholder="Jenis Perusahaan" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Website Perusahaan</label>
            <input type="text" class="form-control" name="website" required
                    placeholder="Website Perusahaan" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit User</button>
            <a href="/companies">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection