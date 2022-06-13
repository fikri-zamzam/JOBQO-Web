@extends('layouts.main')

@section('content')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
</div>
@endif

<a href="{{ url('admin/companies/create') }}" class="btn btn-primary mt-3"><i class="fa fa-plus-square mr-2"></i>Tambah {{ $title }}</a>
<table class="table mt-3">
    <thead class="table-dark">
      <th>Kode Perusahaan</th>
      <th>Nama Perusahaan</th>
      <th>Kontak</th>
      <th>Bidang </th>
      <th>Jenis</th>
      <th>Website</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      @foreach ($companies as $key=>$value)
      <tr>
        <td scope="row"> {{ $value->id }} </td>
        <td> {{ $value->name_company }} </td>
        <td> {{ $value->contact }} </td>
        <td> {{ $value->Sectors->nameSector }} </td>
        <td> {{ $value->Types->nameType }} </td>
        <td> {{ $value->website }} </td>
        <td>
          <div class="row">
            <div class="col-3">
                <a class="btn btn-info" href="{{ url('admin/companies/'.$value->id.'/edit') }}">Edit</a>
            </div>
            <div class="col-3">
                <form action="{{ url('admin/companies/'.$value->id) }}" method="POST">
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