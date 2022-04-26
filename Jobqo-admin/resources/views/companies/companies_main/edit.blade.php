@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('companies/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Perusahaan</label>
            <input type="text" class="form-control" name="namaPerusahaan" required
                    placeholder="Nama Perusahaan" value="{{ $model->name_company }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Alamat Perusahaan</label>
            <input type="text" class="form-control" name="alamat" required
                    placeholder="Alamat Perusahaan" value="{{ $model->alamat }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Kode Pos</label>
            <input type="text" class="form-control" name="kodePos" required
                    placeholder="Kode Pos" value="{{ $model->kode_pos }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email Perusahaan</label>
            <input type="text" class="form-control" name="email" required
                    placeholder="Email Perusahaan" value="{{ $model->email }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Kontak Perusahaan</label>
            <input type="text" class="form-control" name="contact" required
                    placeholder="Kontak Perusahaan" value="{{ $model->contact }}">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Izin Usaha</label>
            <input type="text" class="form-control" name="izinUsaha" required
                    placeholder="Izin Usaha" value="{{ $model->izin_usaha }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Logo Perusahaan</label>
            <input type="text" class="form-control" name="imgLogo" required
                    placeholder="Logo Perusahaan" value="{{ $model->img_logo }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Bidang Perusahaan</label>
            <input type="text" class="form-control" name="bidangPerusahaan" required
                    placeholder="Bidang Perusahaan" value="{{ $model->company_sector_id }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Jenis Perusahaan</label>
            <input type="text" class="form-control" name="jenisPerusahaan" required
                    placeholder="Jenis Perusahaan" value="{{ $model->company_type_id }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Tempat Perusahaan</label>
            <input type="text" class="form-control" name="tempatPerusahaan" required
                    placeholder="Tempat Perusahaan" value="{{ $model->company_place_id }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Website Perusahaan</label>
            <input type="text" class="form-control" name="website" required
                    placeholder="Website Perusahaan" value="{{ $model->website }}" >
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