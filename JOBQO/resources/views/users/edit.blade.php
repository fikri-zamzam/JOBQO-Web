@extends('layouts.main')

@section('content')

<div class="col-12">
    <form action="{{ url('user/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nama User</label>
            <input type="text" class="form-control" name="namaUser" required
                    placeholder="Nama User" value="{{ $model->name }}" >
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" name="userName" required
                    placeholder="Username" value="{{ $model->username }}">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email </label>
            <input type="text" class="form-control" name="emailUser" required
                    placeholder="Email User" value="{{ $model->email }}">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" name="passUser" required
                    placeholder="Password User" value="{{ $model->password }}">
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Edit User</button>
            <a href="/user">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection