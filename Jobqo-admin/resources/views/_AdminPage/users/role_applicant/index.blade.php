@extends('layouts.main')

@section('content')
    
<a href="{{ url('admin/applicant/create') }}" class="btn btn-primary mt-3"><i class="fa fa-plus-square mr-2"></i>Tambah {{ $title }}</a>
<table class="table mt-3">
    <thead class="table-dark">
      <th>Nomor</th>
      <th>ID</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Gender</th>
      <th>Tgl lahir</th>
      <th>Email</th>
      <th>Foto</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      @foreach ($applicant as $key=>$value)
      <tr>
        <td scope="row"> {{ $key+1 }} </td>
        <td> {{ $value->id }} </td>
        <td> {{ $value->name }} </td>
        <td> {{ $value->username }} </td>
        <td> {{ ($value->gender == "L" ? "Laki-laki" : "Perempuan" ) }} </td>
        <td> {{ $value->tgl_lahir }} </td>
        <td> {{ $value->email }} </td>
        <td>
          @if ($value->img == NULL)
            <img style="display:block;" width="50px" height="50px" class="img-circle" src="{{ asset('img/user-profile.png') }}" /></td>
          @else
            <img style="display:block;" width="50px" height="50px" class="img-circle" src="{{ asset('img/'. $value->img) }}" /></td>
          @endif
        <td>
          {{-- <button><a href="{{ asset('storage/Applicant-document/ey7caYTNu7chBzbH8EJQpgDBZxwtI5HaYGvOPePF.pdf') }}">lihat file</a></button> --}}
          <div class="row">
            <div class="col-3">
                <a class="btn btn-info" href="{{ url('admin/applicant/'.$value->id.'/edit') }}">Edit</a>
            </div>
            <div class="col-3">
                <form action="{{ url('admin/applicant/'.$value->id) }}" method="POST">
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