@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('user') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama User</label>
            <input type="text" class="form-control" name="namaUser" required
                    placeholder="Nama User" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" name="userName" required
                    placeholder="Username">
        </div>
        <label for="genderLabel">Gender</label><br>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genderUser" id="lk" value="L">
            <label class="form-check-label" for="lk">
              Laki-laki
            </label>
          </div>
          <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genderUser" id="pr" value="P">
            <label class="form-check-label" for="pr">
              Perempuan
            </label>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email </label>
            <input type="text" class="form-control" name="emailUser" required
                    placeholder="Email User">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" name="passUser" required
                    placeholder="Password User">
        </div>
        <div class="form-group mt-2">
            <label for="">Tanggal lahir </label>
            <input type="date" class="form-control" name="tglUser" required>
        </div>
        <div class="form-group mt-2">
            <label for="alamat">Alamat</label><br>
            <textarea class="form-control" name="alamat" id="alamat" >
            </textarea>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Pendidikan Terakhir </label>
            <input type="text" class="form-control" name="pendidikanUser" required
                    placeholder="contoh : Politeknik Negeri Jember">
        </div>
        <div class="form-group mt-2">
            <label for="qoute">Qoute utama</label><br>
            <textarea class="form-control" name="qoute" id="qouteUser" >
            </textarea>
        </div>
        <div class="form-group mt-2">
            <label for="notel">Nomor Telfon </label>
            <input type="text" class="form-control" name="notelUser" required
                    placeholder="contoh : 0822332xxxx">
        </div>
        {{-- Tombol Tambah --}}
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="/users">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection