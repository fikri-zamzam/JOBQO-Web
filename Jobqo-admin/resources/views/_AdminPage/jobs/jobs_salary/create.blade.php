@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin/jobs_salary') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="exampleFormControlInput1">Range gaji</label>
        <div class="form-inline">
            <div class="form-group mb-2">
              <input type="text" class="form-control" id="staticEmail2" placeholder="Minimum Gaji"
              name="g_awal" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" >
            </div>
            
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" id="inputPassword2" placeholder="Maximum Gaji"
              name="g_akhir" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" >
            </div>
        </div>
        <p id="gajiHelp" class="form-text text-muted">isi inputan dengan angka saja</p>

        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" required
                    placeholder="Deskripsi">
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="{{ url('admin/jobs_salary') }}">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>
@endsection