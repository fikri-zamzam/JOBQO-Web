@extends('layouts.main')

@section('content')
    
<a href="{{ url('companies/create') }}" class="btn btn-primary mt-3"><i class="fa fa-plus-square mr-2"></i>Tambah {{ $title }}</a>
<table class="table mt-3">
    <thead class="table-dark">
      <th>Nomor</th>
      <th>ID</th>
      <th>Nama Perusahaan</th>
      <th>Alamat</th>
      <th>Kode Pos</th>
      <th>Kontak</th>
      <th>Izin Usaha</th>
      <th>Logo</th>
      <th>Bidang Perusahaan</th>
      <th>Jenis Perusahaan</th>
      <th>Website</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      @foreach ($companies as $key=>$value)
      <tr>
        <td scope="row"> {{ $key+1 }} </td>
        <td> {{ $value->id }} </td>
        <td> {{ $value->name_company }} </td>
        <td> {{ $value->alamat }} </td>
        <td> {{ $value->kode_pos }} </td>
        <td> {{ $value->email }} </td>
        <td> {{ $value->contact }} </td>
        <td> {{ $value->izin_usaha }} </td>
        <td> {{ $value->img_logo }} </td>
        <td> {{ $value->company_sector_id }} </td>
        <td> {{ $value->company_type_id }} </td>
        <td> {{ $value->company_place_id }} </td>
        <td> {{ $value->website }} </td>
        <td>
          <div class="row">
            <div class="col-3">
                <a class="btn btn-info" href="{{ url('companies/'.$value->id.'/edit') }}">Edit</a>
            </div>
            <div class="col-3">
                <form action="{{ url('companies/'.$value->id) }}" method="POST">
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