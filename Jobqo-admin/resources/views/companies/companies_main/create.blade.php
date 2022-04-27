@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('companies') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Perusahaan</label>
            <input type="text" class="form-control" name="namaPerusahaan" required
                    placeholder="Nama Perusahaan" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Alamat Perusahaan</label>
            <input type="text" class="form-control" name="alamat" required
                    placeholder="Alamat Perusahaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Kode Pos</label>
            <input type="text" class="form-control" name="kodePos" required
                    placeholder="Kode Pos">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email Perusahaan</label>
            <input type="text" class="form-control" name="email" required
                    placeholder="Email Perusahaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Kontak Perusahaan</label>
            <input type="text" class="form-control" name="contact" required
                    placeholder="Kontak Perusahaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Izin Usaha</label>
            <input type="text" class="form-control" name="izinUsaha" required
                    placeholder="Izin Usaha">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Logo Perusahaan</label>
            <input type="text" class="form-control" name="imgLogo" required
                    placeholder="Logo Perusahaan">
        </div>
        <div class="form-group">
            <label for="idAuth">Bidang Perusahaan</label>
            <select class="form-control" id="idAuth" name="admin_auths_id">
            @foreach ($CompanySector as $sector)
            <option value="{{ $sector->id }}">{{ $sector->nameSector }}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idType">Jenis Perusahaan</label>
            <select class="form-control" id="idType" name="admin_auths_id">
            @foreach ($CompanyType as $type)
            <option value="{{ $type->id }}">{{ $type->nameType }}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Tempat Perusahaan</label>
            <input type="text" class="form-control" name="tempatPerusahaan" required
                    placeholder="Tempat Perusahaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Website Perusahaan</label>
            <input type="text" class="form-control" name="website" required
                    placeholder="Website Perusahaan">
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="/companies">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection