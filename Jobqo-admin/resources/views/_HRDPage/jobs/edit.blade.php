@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('hrd/jobs/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Pekerjaan</label>
            <input type="text" class="form-control" name="name_job" 
                    placeholder="Nama Pekerjaan" value="{{ old('name_job',$model->name_job) }}" >
        </div>
        @error('name_job')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi Pekerjaan</label>
            <input type="text" class="form-control" name="desk_job" 
                    placeholder="Deskripsi Pekerjaan" value="{{ old('desk_job',$model->desk_job) }}">
        </div>
        @error('desk_job')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Gaji</label>
            <input type="number" class="form-control" name="gaji" 
                    placeholder="Gaji" value="{{ old('gaji',$model->gaji) }}">
        </div>
        @error('gaji')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="idcategory">Kategori Pekejaan</label>
            <select class="form-control" id="idcategory" name="job_category_id">
            @foreach ($Categories as $ctg)
            <option value="{{ $ctg->id }}" {{ (($model->job_category_id == $ctg->id ) ? "selected" : "") }} >{{ $ctg->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idposition">Posisi Pekejaan</label>
            <select class="form-control" id="idposition" name="job_position_id">
            @foreach ($Positions as $pst)
            <option value="{{ $pst->id }}" {{ (($model->job_position_id == $pst->id ) ? "selected" : "") }} >{{ $pst->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Persyaratan Pekerjaan</label>
            <p>
                <input id="x" type="hidden" name="job_requirement" value="{{ old('job_requirement',$model->job_requirement) }}" />
                <trix-editor input="x" class="trix-content"></trix-editor>
            </p>
        </div>
        @error('job_requirement')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit Perubahan</button>
            <a href="/jobs">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection