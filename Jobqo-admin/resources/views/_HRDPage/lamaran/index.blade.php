@extends('layouts.main')

@section('content')

<div class="mt-5"></div>
<ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="draft-tab" data-toggle="tab" href="#draft" role="tab" aria-controls="draft" aria-selected="true">Draft Lamaran</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sedang Ditinjau</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Lamaran Yang Diterima</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Lamaran Yang Ditolak</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="draft" role="tabpanel" aria-labelledby="draft-tab">
    {{-- Halaman Draft Lamaran --}}
    
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
        @if ($value->status == 'Menunggu diproses')
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
        @endif
      @endforeach
      </tbody>
    </table>
  
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    {{-- Halaman Tinjau Lamaran --}}
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
        @if ($value->status == 'Sedang diproses')
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
        @endif
      @endforeach
      </tbody>
    </table>

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    
    {{-- Halaman Draft Lamaran --}}
    
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
        @if ($value->status == 'Melanjutkan ke seleksi')
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
        @endif
      @endforeach
      </tbody>
    </table>

  </div>
  <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
    
      {{-- Halaman Lamaran Ditolak --}}
    
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
          @if ($value->status == 'Ditolak')
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
          @endif
        @endforeach
        </tbody>
      </table>

  </div>
</div>


  @endsection