@extends('layouts.main')

@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
</div>
@endif

<table class="table mt-3">
    <thead class="table-dark">
      <th>ID Applicant</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Gender</th>
      <th>Email</th>
      <th>Foto</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      @foreach ($admin as $key=>$value)
      <tr>
        <td> {{ $value->id }} </td>
        <td> {{ $value->name }} </td>
        <td> {{ $value->username }} </td>
        <td> {{ ($value->gender == "L" ? "Laki-laki" : "Perempuan" ) }} </td>
        <td> {{ $value->email }} </td>
        <td><img style="display:block;" width="50px" height="50px" class="img-circle" src="{{ asset('storage/'. $value->img) }}" /></td>
        
        <td>
          <div class="row">
            <div class="col-3">
              <a class="btn btn-success" href="{{ url('admin/admin/'.$value->id.'/edit') }}">Terima</a>
            </div>
            <div class="col-3">
                <a class="btn btn-info" href="{{ url('admin/admin/'.$value->id.'/edit') }}">Lihat</a>
            </div>
            <div class="">
                <form action="{{ url('admin/admin/'.$value->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection