@extends('layouts.main')

@section('content')
    
<table class="table mt-3">
    <thead class="table-dark">
      <th>Id Lamaran</th>
      <th>Nama Pekerja</th>
      <th>Pekerjaan</th>
      <th>Nama Perusahaan</th>
      <th>Status </th>
      {{-- <th>Aksi</th> --}}
    </thead>
    <tbody>
      @forelse ($lamaran as $key=>$value)
      <tr>
        <td scope="row"> {{ $value->id }} </td>
        <td> {{ $value->Data_user->name }} </td>
        <td> {{ $value->Data_job->name_job }} </td>
        <td> {{ $value->Data_comp->name_company }} </td>
        <td> {{ $value->status }} </td>
        {{-- <td>
          <div class="col-3">
            <a class="btn btn-info" href="{{ url('admin/admin/'.$value->id.'/edit') }}">Lihat</a>
          </div>
        </td> --}}
      </tr>
      @empty
      <tr>
        <td colspan="4"><h3 class="text-center">Data Kosong</h3></td>
      </tr>
      @endforelse
    </tbody>
  </table>

  @endsection