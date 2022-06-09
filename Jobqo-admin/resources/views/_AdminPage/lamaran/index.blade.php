@extends('layouts.main')

@section('content')
    
<a href="{{ url('admin/jobs/create') }}" class="btn btn-primary mt-3"><i class="fa fa-plus-square mr-2"></i>Tambah {{ $title }}</a>
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
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection