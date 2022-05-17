@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('users/'.$model->id) }}" method="POST" enctype="multipart/form-data">
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
            <input type="password" class="form-control" name="password" required
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
        <div class="form-group mt-2">
            <label for="edu">Pendidikan Terakhir </label>
            <input type="text" class="form-control" value="{{ old('education',$model->education) }}" name="education" id="edu" required
                    placeholder="contoh : Politeknik Negeri Jember">
        </div>
        @error('education')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="qouteUser">Qoute utama</label><br>
            <textarea class="form-control" name="quote" id="qouteUser" >{{ old('quote',$model->quote) }}
            </textarea>
        </div>
        @error('quote')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="notel">Nomor Telfon </label>
            <input type="number" class="form-control" value="{{ old('phone',$model->phone) }}" name="phone" required
                    placeholder="contoh : 0822332xxxx">
        </div>
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mt-2">
            <label for="curJob">Current Job</label>
            <input type="text" class="form-control" value="{{ old('current_job',$model->current_job) }}" name="current_job" required
                    placeholder="contoh : Freelance">
        </div>
        @error('current_job')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {{-- Tombol Tambah --}}
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit Perubahan</button>
            <a href="/users">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection