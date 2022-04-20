@extends('layouts.main')

@section('content')
    
<a href="{{ url('jobs_position/create') }}" class="btn btn-primary mt-3"><i class="fa fa-plus-square mr-2"></i>Tambah {{ $title }}</a>
<table class="table mt-3">
    <thead class="table-dark">
      <th>Nomor</th>
      <th>ID</th>
      <th>Nama Job</th>
      <!-- <th>Bidang</th>
      <th>No Telepon</th>
      <th>Alamat</th> -->
      <th>Aksi</th>
    </thead>
    <tbody>
      @foreach ($jobs as $key=>$value)
      <tr>
        <td scope="row"> {{ $key+1 }} </td>
        <td> {{ $value->id }} </td>
        <td> {{ $value->name }} </td>
        <!-- <td> {{ $value->bidang }} </td>
        <td> {{ $value->no_telp }} </td>
        <td> {{ $value->address }} </td> -->
        <td>
          <div class="row">
            <div class="col-3">
                <a class="btn btn-info" href="{{ url('jobs_position/'.$value->id.'/edit') }}">Edit</a>
            </div>
            <div class="col-3">
                <form action="{{ url('jobs_position/'.$value->id) }}" method="POST">
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