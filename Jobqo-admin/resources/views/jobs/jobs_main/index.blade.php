@extends('layouts.main')

@section('content')
    
<a href="{{ url('jobs/create') }}" class="btn btn-primary mt-3"><i class="fa fa-plus-square mr-2"></i>Tambah {{ $title }}</a>
<table class="table mt-3">
    <thead class="table-dark">
      <th>Nomor</th>
      <th>ID</th>
      <th>Nama Pekerjaan</th>
      <th>Deskripsi Pekerjaan</th>
      <th>Gaji</th>
      <th>Perusahaan</th>
      <th>Kategori Pekerjaan</th>
      <th>Posisi Pekerjaan</th>
      <th>Persyaratan Pekerjaan</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      @foreach ($jobs as $key=>$value)
      <tr>
        <td scope="row"> {{ $key+1 }} </td>
        <td> {{ $value->id }} </td>
        <td> {{ $value->name_job }} </td>
        <td> {{ $value->desk_job }} </td>
        <td> {{ $value->gaji }} </td>
        <td> {{ $value->company_id }} </td>
        <td> {{ $value->job_category_id }} </td>
        <td> {{ $value->job_position_id }} </td>
        <td> {{ $value->job_requirement }} </td>
        <td>
          <div class="row">
            <div class="col-3">
                <a class="btn btn-info" href="{{ url('jobs/'.$value->id.'/edit') }}">Edit</a>
            </div>
            <div class="col-3">
                <form action="{{ url('jobs/'.$value->id) }}" method="POST">
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