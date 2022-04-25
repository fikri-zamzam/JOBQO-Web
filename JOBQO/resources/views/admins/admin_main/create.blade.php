@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama User</label>
            <input type="text" class="form-control" name="name" required
                    placeholder="Nama Admin" class="@error('name') is-invalid @enderror">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" name="username" required
                    placeholder="Username" class="@error('username') is-invalid @enderror">
        </div>
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="genderLabel">Gender</label><br>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="lk" value="L">
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
        @error('gender')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email </label>
            <input type="text" class="form-control" name="email" required
                    placeholder="Email Admin">
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
            <option value="{{ $auth->id }}">{{ $auth->auth_type }}</option>
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