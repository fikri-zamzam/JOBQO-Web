@extends('layouts.main')

@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
</div>
@endif

<table class="table mt-3">
    <thead class="table-dark">
      <th>Id Lamaran</th>
      <th>Nama Pekerja</th>
      <th>Pekerjaan</th>
      <th>Nama Perusahaan</th>
      <th>Status </th>
      <th>Aksi</th>
    </thead>
    <tbody>
    @foreach ($lamaran as $key=>$value)
      <tr>
        <td scope="row"> {{ $value->id }} </td>
        <td> {{ $value->users_id }} </td>
        <td> {{ $value->jobs_id }} </td>
        <td> {{ $value->resume }} </td>
        <td> {{ $value->status }} </td>
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