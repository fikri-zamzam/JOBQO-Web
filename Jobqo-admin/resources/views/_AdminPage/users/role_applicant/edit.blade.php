@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin/applicant/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama User</label>
            <input type="text" class="form-control" value="{{ old('name',$model->name) }}" name="name" required
                    placeholder="Nama User" >
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" value="{{ old('username',$model->username) }}" name="username" required
                    placeholder="Username">
        </div>
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="genderLabel">Gender</label><br>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio"  name="gender" id="lk" value="L" {{ (( $model->gender == "L" ) ? "checked" : "" ) }}>
            <label class="form-check-label" for="lk">
              Laki-laki
            </label>
          </div>
          <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="pr" value="P" {{ (( $model->gender == "P" ) ? "checked" : "" ) }}>
            <label class="form-check-label" for="pr">
              Perempuan
            </label>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email </label>
            <input type="text" class="form-control" value="{{ old('email',$model->email) }}" name="email" required
                    placeholder="Email User">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" name="password" 
                    placeholder="Password User">
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="">Tanggal lahir </label>
            <input type="date" class="form-control" name="tgl_lahir" value="{{ $model->tgl_lahir }}" required>
        </div>
        @error('tgl_lahir')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="alamat">Alamat</label><br>
            <textarea class="form-control" name="alamat" id="alamat" >{{ old('alamat',$model->alamat) }}
            </textarea>
        </div>
        @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="image">Pilih Foto Profile</label><br>
        <input type="hidden" name="oldImage" value="{{ $model->img }}">
        @if ($model->img != NULL)
            <img class="img-fluid mb-3" src="{{ asset('storage/'.$model->img) }}" id="img-preview" alt="preview" style="height: 150px">
        @else
            <img class="img-fluid mb-3" src="{{ asset('img/image-preview.png') }}" id="img-preview" style="height: 150px">
        @endif

        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="img" onchange="document.getElementById('img-preview').src = window.URL.createObjectURL(this.files[0])">
            <label class="custom-file-label" for="image">Choose file</label>
        </div>

        @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Tombol Tambah --}}
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit Perubahan</button>
            <a href="{{ url('admin/applicant') }}">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection