@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <h1>belum jadi</h1>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama User</label>
            <input type="text" class="form-control" name="name" required
                    placeholder="Nama Admin" value="{{ old('name',$model->name) }}" class="@error('name') is-invalid @enderror">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" name="username" required
                    placeholder="Username" value="{{ old('username',$model->username) }}" class="@error('username') is-invalid @enderror">
        </div>
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="genderLabel">Gender</label><br>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="lk" value="L" {{ (( $model->gender == "L" ) ? "checked" : "" ) }}>
            <label class="form-check-label" for="lk">
              Laki-laki
            </label>
        </div>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="pr" value="P" {{ (( $model->gender == "P" ) ? "checked" : "" ) }} >
            <label class="form-check-label" for="pr">
              Perempuan
            </label>
        </div>
        @error('gender')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email </label>
            <input type="text" class="form-control" name="email" required
                    placeholder="Email Admin" value="{{ old('email',$model->email) }}">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" name="password" required
                    placeholder="Password Admin">
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="idAuth">Jenis Admin</label>
            <select class="form-control" id="idAuth" name="admin_auths_id">
            @foreach ($Admin_auths as $auth)
            <option value="{{ $auth->id }}" {{ (($model->admin_auths_id == $auth->id ) ? "selected" : "") }} >{{ $auth->auth_type }}</option>
            @endforeach
            </select>
        </div>

        <label for="image">Pilih Foto Profile</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="img">
            <label class="custom-file-label" for="image">Choose file</label>
        </div>
        @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="/">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection