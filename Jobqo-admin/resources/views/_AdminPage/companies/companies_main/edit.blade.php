@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin/companies/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Perusahaan</label>
            <input type="text" class="form-control" name="name_company" required
                    placeholder="Nama Perusahaan" value="{{ old('name_company',$model->name_company) }}">
        </div>
        @error('name_company')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Alamat Perusahaan</label>
            <input type="text" class="form-control" name="alamat" required
                    placeholder="Alamat Perusahaan" value="{{ old('alamat',$model->alamat) }}">
        </div>
        @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Kode Pos</label>
            <input type="number" class="form-control" name="kode_pos" required
                    placeholder="Kode Pos" maxlength="6" value="{{ old('kode_pos',$model->kode_pos) }}">
        </div>
        @error('kode_pos')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email Perusahaan</label>
            <input type="email" class="form-control" name="email" required
                    placeholder="Email Perusahaan" value="{{ old('email',$model->email) }}">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Kontak Perusahaan</label>
            <input type="number" class="form-control" name="contact" required
                    placeholder="Kontak Perusahaan" value="{{ old('contact',$model->contact) }}">
        </div>
        @error('contact')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="idSector">Bidang Perusahaan</label>
            <select class="form-control" id="idSector" name="company_sector_id">
            @foreach ($CompanySector as $sector)
            <option value="{{ $sector->id }}" {{ (($model->company_sector_id == $sector->id ) ? "selected" : "") }}>{{ $sector->nameSector }}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idType">Jenis Perusahaan</label>
            <select class="form-control" id="idType" name="company_type_id">
            @foreach ($CompanyType as $type)
            <option value="{{ $type->id }}" {{ (($model->company_type_id == $type->id ) ? "selected" : "") }}>{{ $type->nameType }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Website Perusahaan</label>
            <input type="text" class="form-control" name="website" required
                    placeholder="Website Perusahaan" value="{{ old('website',$model->website) }}">
        </div>
        @error('website')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Izin Usaha</label>

            <select class="form-control" id="id_izin" name="status_izin">
                <option value="N" {{ (($model->status_izin == 'N' ) ? "selected" : "") }}>Belum diverifikasi</option>
                <option value="Y" {{ (($model->status_izin == 'Y' ) ? "selected" : "") }}>Sudah diverifikasi</option>
            </select>

        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Logo Perusahaan</label>
            <input type="text" class="form-control" name="img_logo"
                    placeholder="Logo Perusahaan">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Tempat Perusahaan</label>
            <input type="text" class="form-control" name="company_place_id" 
                    placeholder="Tempat Perusahaan">
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit Perubahan</button>
            <a href="/companies">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection