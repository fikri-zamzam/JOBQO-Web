@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('jobs/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Pekerjaan</label>
            <input type="text" class="form-control" name="namaJob" required
                    placeholder="Nama Pekerjaan" value="{{ $model->name_job }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi Pekerjaan</label>
            <input type="text" class="form-control" name="deskJob" required
                    placeholder="Deskripsi Pekerjaan" value="{{ $model->desk_job }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Gaji</label>
            <input type="text" class="form-control" name="gaji" required
                    placeholder="Gaji" value="{{ $model->gaji }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Perusahaan</label>
            <input type="text" class="form-control" name="companyId" required
                    placeholder="Perusahaan" value="{{ $model->company_id }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Kategori Pekerjaan</label>
            <input type="text" class="form-control" name="jobCategory" required
                    placeholder="Kategori Pekerjaan" value="{{ $model->job_category_id }}">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Posisi Pekerjaan</label>
            <input type="text" class="form-control" name="jobPosition" required
                    placeholder="Posisi Pekerjaan" value="{{ $model->job_position_id }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Persyaratan Pekerjaan</label>
            <input type="text" class="form-control" name="jobReq" required
                    placeholder="Persyaratan Pekerjaan" value="{{ $model->job_requirement }}" >
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit User</button>
            <a href="/jobs">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection