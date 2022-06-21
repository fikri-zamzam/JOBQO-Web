@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('hrd/jobs_salary/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        
        <label for="exampleFormControlInput1">Range gaji</label>
        <div class="form-inline">
            <div class="form-group mb-2">
              <input type="text" class="form-control" id="staticEmail2" placeholder="Minimum Gaji"
              name="g_awal" value="{{ $model->g_awal }}"
              onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" id="inputPassword2" placeholder="Maximum Gaji"
              name="g_akhir" value="{{ $model->g_akhir }}"
              onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
            </div>
        </div>
        <p id="gajiHelp" class="form-text text-muted">isi inputan dengan angka saja</p>

        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" required
                    placeholder="Deskripsi" value="{{ $model->deskripsi }}" >
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit Perubahan</button>
            <a href="{{ url('/hrd/jobs_salary') }}">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection