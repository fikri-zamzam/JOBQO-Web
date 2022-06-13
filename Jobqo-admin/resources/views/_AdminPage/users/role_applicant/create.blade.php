@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin/applicant') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama User</label>
            <input type="text" class="form-control" value="{{ old('name') }}" name="name" required
                    placeholder="Nama User" >
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" value="{{ old('username') }}" name="username" required
                    placeholder="Username">
        </div>
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="genderLabel">Gender</label><br>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio"  name="gender" id="lk" value="L">
            <label class="form-check-label" for="lk">
              Laki-laki
            </label>
          </div>
          <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="pr" value="P">
            <label class="form-check-label" for="pr">
              Perempuan
            </label>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email </label>
            <input type="text" class="form-control" value="{{ old('email') }}" name="email" required
                    placeholder="Email User">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" name="password" required
                    placeholder="Password User">
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="">Tanggal lahir </label>
            <input type="date" class="form-control" name="tgl_lahir" required>
        </div>
        @error('tgl_lahir')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="alamat">Alamat</label><br>
            <textarea class="form-control" name="alamat" id="alamat" >{{ old('alamat') }}</textarea>
        </div>
        @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="image">Pilih Foto Profile</label><br>
        <img class="img-fluid mb-3" src="{{ asset('img/image-preview.png') }}" id="img-preview" style="height: 150px">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="img" onchange="document.getElementById('img-preview').src = window.URL.createObjectURL(this.files[0])">
            <label class="custom-file-label" for="image">Choose file</label>
        </div>
        @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 

        <div class="mt-2">
            <label for="document">Pilih CV Document</label><br>
            <input type="hidden" name="oldDoc" value="{{ $model->cv_doc }}">
            <input type="file" name="cv_doc" class="">
            </div>

        @error('cv_doc')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Tombol Tambah --}}
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="{{ url('admin/applicant') }}">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection