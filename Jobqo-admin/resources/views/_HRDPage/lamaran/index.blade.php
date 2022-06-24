@extends('layouts.main')

@section('content')

<table class="table mt-3">
    <thead class="table-dark">
      <th>Id Lamaran</th>
      <th>Nama Pekerja</th>
      <th>Pekerjaan</th>
      <th>Tanggal</th>
      <th>Status </th>
      <th>Aksi</th>
    </thead>
    <tbody>
    @foreach ($lamaran as $key=>$value)
      <tr>
        <td scope="row"> {{ $value->id }} </td>
        <td> {{ $value->Data_user->name }} </td>
        <td> {{ $value->Data_job->name_job }} </td>
        <td> {{ $value->created_at->format('d-m-Y') }} </td>
        <td> {{ $value->status }} </td>
        <td>
          <div class="row">
            <div class="col-3">
              <form action="{{ url('hrd/lamaran/'.$value->id.'/terima') }}" method="POST">
                @csrf
                <button class="btn btn-success" type="submit">Terima</button>
              </form>
            </div>
            <div class="col-3">
                <form action="{{ url('hrd/lamaran/'.$value->id.'/tinjau') }}" method="POST">
                  @csrf
                  <button class="btn btn-info" type="submit">Lihat</a>
                </form>
            </div>
            <div class="">
              <form action="{{ url('hrd/lamaran/'.$value->id.'/tolak') }}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Tolak</a>
              </form>
            </div>
        </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection