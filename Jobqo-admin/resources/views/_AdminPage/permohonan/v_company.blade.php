@extends('layouts.main')

@section('content')
    
<table class="table mt-3">
    <thead class="table-dark">
      <th>Kode Perusahaan</th>
      <th>Nama Perusahaan</th>
      <th>Kontak</th>
      <th>Bidang </th>
      <th>Jenis</th>
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
        <td>
          <div class="row">
            <div class="col-3">
                <form action="{{ url('admin/verifycompany/'.$value->id) }}" method="POST">
                    @csrf
                    <button class="btn btn-success">Terima</button>
                </form>
            </div>
            <div class="col-3">
                <a class="btn btn-info" href="{{ url('admin/verifycompany/'.$value->id.'/edit') }}">Lihat</a>
            </div>
            <div class="col-3">
                <form action="{{ url('admin/verifycompany/'.$value->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger">Tolak</button>
                </form>
            </div>
        </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection