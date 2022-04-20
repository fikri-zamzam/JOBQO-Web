@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('jobs') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama Job</label>
            <input type="text" class="form-control" name="namaJob" required
                    placeholder="Nama Job" >
        </div>
        <!-- <div class="form-group mt-2">
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
        </div> -->
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="/jobs">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection