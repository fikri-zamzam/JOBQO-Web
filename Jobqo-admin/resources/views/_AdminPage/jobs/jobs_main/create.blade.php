@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin/jobs') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Pekerjaan</label>
            <input type="text" class="form-control" name="name_job" required
                    placeholder="Nama Pekerjaan" value="{{ old('name_job') }}" >
        </div>
        @error('name_job')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi Pekerjaan</label>
            <input type="text" class="form-control" name="desk_job" required
                    placeholder="Deskripsi Pekerjaan" value="{{ old('desk_job') }}">
        </div>
        @error('desk_job')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Gaji</label>
            <input type="number" class="form-control" name="gaji" required
                    placeholder="Gaji" value="{{ old('gaji') }}">
        </div>
        @error('gaji')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="idcompany">Asal Pekerjaan</label>
            <select class="form-control" id="idcompany" name="company_id">
            @foreach ($Companies as $com)
            <option value="{{ $com->id }}">{{ $com->name_company }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="idcategory">Kategori Pekejaan</label>
            <select class="form-control" id="idcategory" name="job_category_id">
            @foreach ($Categories as $ctg)
            <option value="{{ $ctg->id }}">{{ $ctg->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idposition">Posisi Pekejaan</label>
            <select class="form-control" id="idposition" name="job_position_id">
            @foreach ($Positions as $pst)
            <option value="{{ $pst->id }}">{{ $pst->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Persyaratan Pekerjaan</label>
            <input type="text" class="form-control" name="job_requirement" required
                    placeholder="Persyaratan Pekerjaan" value="{{ old('job_requirement') }}">
        </div>
        @error('job_requirement')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="/jobs">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection