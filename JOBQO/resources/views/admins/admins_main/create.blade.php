@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('admin') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama User</label>
            <input type="text" class="form-control" name="namaAdmin" required
                    placeholder="Nama Admin" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" name="userName" required
                    placeholder="Username">
        </div>
        <label for="genderLabel">Gender</label><br>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genderAdmin" id="lk" value="L">
            <label class="form-check-label" for="lk">
              Laki-laki
            </label>
          </div>
          <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genderAdmin" id="pr" value="P">
            <label class="form-check-label" for="pr">
              Perempuan
            </label>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email </label>
            <input type="text" class="form-control" name="emailAdmin" required
                    placeholder="Email Admin">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" name="passAdmin" required
                    placeholder="Password Admin">
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="/">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection