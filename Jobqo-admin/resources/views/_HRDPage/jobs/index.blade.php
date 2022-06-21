@extends('layouts.main')

@section('content')
    
<a href="{{ url('hrd/jobs/create') }}" class="btn btn-primary mt-3"><i class="fa fa-plus-square mr-2"></i>Tambah {{ $title }}</a>
<table class="table mt-3">
    <thead class="table-dark">
      <th>ID JOB</th>
      <th>Nama Pekerjaan</th>
      <th>Gaji</th>
      <th>Kategori </th>
      <th>Posisi Pekerjaan</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      @foreach ($jobs as $key=>$value)
      <tr>
        <td scope="row"> {{ $value->id }} </td>
        <td> {{ $value->name_job }} </td>
        <td> {{ $value->rangeGaji->rupiah }} </td>
        <td> {{ $value->Categories->name }} </td>
        <td> {{ $value->Positions->name }} </td>
        <td>
          <div class="row">
            <div class="col-3">
                <a class="btn btn-info" href="{{ url('hrd/jobs/'.$value->id.'/edit') }}">Edit</a>
            </div>
            <div class="col-3">
                <form action="{{ url('hrd/jobs/'.$value->id) }}" method="POST"
                  onsubmit="return confirm('Apakah yakin ingin menghapus data Pekerjaan ?')">
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