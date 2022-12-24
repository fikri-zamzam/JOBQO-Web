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
        <th>Foto</th>
        <th>Pekerjaan</th>
        <th>Tanggal</th>
        <th>Status </th>
        <th>Aksi</th>
      </thead>
      <tbody>
      @forelse ($lamaran as $key=>$value)
        @if ($value->status == 'Menunggu diproses')
        <tr>
          <td scope="row"> {{ $value->id }} </td>
          <td> {{ $value->Data_user->name }} </td>
          <td> <img class="img-circle" width="50" height="50" src="{{ asset( (($value->Data_user->img == NULL) ? 'img/user-profile.png' : 'img/'.$value->Data_user->img ) ) }}" alt=""> </td>
          <td> {{ $value->Data_job->name_job }} </td>
          <td> {{ $value->created_at->format('d-m-Y') }} </td>
          <td> {{ $value->status }} </td>
          <td>
            <div class="row">
                <button class="btn btn-info" data-toggle="modal" data-target=".detail-lamaran-{{$value->id}}">Lihat</a>
            </div>
          </td>
        </tr>      
        @endif
        @empty
        <tr>
          <td class="text-center" colspan="5"><h5>Tidak ada lamaran yang dapat ditampilkan</h5></td>
        </tr>
      @endforelse
      </tbody>
    </table>
  
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    {{-- Halaman Tinjau Lamaran --}}
    <table class="table mt-3">
      <thead class="table-dark">
        <th>Id Lamaran</th>
        <th>Nama Pekerja</th>
        <th>Foto</th>
        <th>Pekerjaan</th>
        <th>Tanggal</th>
        <th>Status </th>
        <th>Aksi</th>
      </thead>
      <tbody>
      @forelse ($lamaran as $key=>$value)
        @if ($value->status == 'Sedang diproses')
        <tr>
          <td scope="row"> {{ $value->id }} </td>
          <td> {{ $value->Data_user->name }} </td>
          <td> <img class="img-circle" width="50" height="50" src="{{ asset( (($value->Data_user->img == NULL) ? 'img/user-profile.png' : 'img/'.$value->Data_user->img ) ) }}" alt=""> </td>
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
                <button class="btn btn-info" data-toggle="modal" data-target=".detail-lamaran-{{$value->id}}">Lihat</a>
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
        @empty
        <tr>
          <td class="text-center" colspan="5"><h5>Tidak ada lamaran yang dapat ditampilkan</h5></td>
        </tr>
      @endforelse
      </tbody>
    </table>

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    
    {{-- Halaman Draft Lamaran --}}
    
    <table class="table mt-3">
      <thead class="table-dark">
        <th>Id Lamaran</th>
        <th>Nama Pekerja</th>
        <th>Foto</th>
        <th>Pekerjaan</th>
        <th>Tanggal</th>
        <th>Status </th>
        <th>Aksi</th>
      </thead>
      <tbody>
      @forelse ($lamaran as $key=>$value)
        @if ($value->status == 'Melanjutkan ke seleksi')
        <tr>
          <td scope="row"> {{ $value->id }} </td>
          <td> {{ $value->Data_user->name }} </td>
          <td> <img class="img-circle" width="50" height="50" src="{{ asset( (($value->Data_user->img == NULL) ? 'img/user-profile.png' : 'img/'.$value->Data_user->img ) ) }}" alt=""> </td>
          <td> {{ $value->Data_job->name_job }} </td>
          <td> {{ $value->created_at->format('d-m-Y') }} </td>
          <td> {{ $value->status }} </td>
          <td>
            <div class="row">

              <div class="col-3">
                <button class="btn btn-info" data-toggle="modal" data-target=".detail-lamaran-{{$value->id}}">Lihat</a>
              </div>
              <div class="col-3">
                <form action="{{ url('hrd/lamaran/'.$value->id.'/tolak') }}" method="POST">
                  @csrf
                  <button class="btn btn-danger" type="submit">Tolak</a>
                </form>
              </div>
          </div>
          </td>
        </tr>      
        @endif
        @empty
        <tr>
          <td class="text-center" colspan="5"><h5>Tidak ada lamaran yang dapat ditampilkan</h5></td>
        </tr>
      @endforelse
      </tbody>
    </table>

  </div>
  <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
    
      {{-- Halaman Lamaran Ditolak --}}
    
      <table class="table mt-3">
        <thead class="table-dark">
          <th>Id Lamaran</th>
          <th>Nama Pekerja</th>
          <th>Foto</th>
          <th>Pekerjaan</th>
          <th>Tanggal</th>
          <th>Status </th>
          <th>Aksi</th>
        </thead>
        <tbody>
        @forelse ($lamaran as $key=>$value)
          @if ($value->status == 'Ditolak')
          <tr>
            <td scope="row"> {{ $value->id }} </td>
            <td> {{ $value->Data_user->name }} </td>
            <td> <img class="img-circle" width="50" height="50" src="{{ asset( (($value->Data_user->img == NULL) ? 'img/user-profile.png' : 'img/'.$value->Data_user->img ) ) }}" alt=""> </td>
            <td> {{ $value->Data_job->name_job }} </td>
            <td> {{ $value->created_at->format('d-m-Y') }} </td>
            <td> {{ $value->status }} </td>
            <td>
              <div class="row">
                <div class="col-3">
                  <button class="btn btn-info" data-toggle="modal" data-target=".detail-lamaran-{{$value->id}}">Lihat</a>
                </div>
            </div>
            </td>
          </tr>      
          @endif
          @empty
          <tr>
            <td class="text-center" colspan="5"><h5>Tidak ada lamaran yang dapat ditampilkan</h5></td>
          </tr>
        @endforelse
        </tbody>
      </table>

  </div>
</div>

  @forelse ($lamaran as $key=>$value)
  <div class="modal fade detail-lamaran-{{$value->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Tinjau Lamaran</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
        </div>
        <div style="overflow-y: auto;
        max-height: 450px;" class="modal-body">
          <div class="form-group">
            <label for=""><h6>Resume Applicant</h6></label>
            <textarea name="resume" class="form-control" cols="30" rows="10" placeholder="Ceritakan sedikit tentang Diri Anda">{{ $value->resume }}</textarea>
          </div>
          <div class="form-group">
            <label class="mt-3" style=""><h6>Dokumen Cv</h6></label>
            <div class="mt-1">
              <a href="{{ asset('document/'.$value->Data_user->cv_doc) }}"><img width="140" height="140" src="{{ asset('img/pdf-icon.png') }}" alt="">
              <div class="mt-2">
                <label><h6>{{ $value->Data_user->cv_name }}</h6></label></a>
              </div>
            </div>
          </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          @if ($value->status == 'Menunggu diproses')

          <form action="{{ url('hrd/lamaran/'.$value->id.'/tinjau') }}" method="POST">
            @csrf
            <button class="btn btn-info" type="submit">Tandai sebagai Ditinjau</button>
          </form>
          @elseif ($value->status == 'Sedang diproses')
          <form action="{{ url('hrd/lamaran/'.$value->id.'/draft') }}" method="POST">
            @csrf
            <button class="btn btn-warning" type="submit">Batal tinjau</button>
          </form>
          
          <form action="{{ url('hrd/lamaran/'.$value->id.'/terima') }}" method="POST">
            @csrf
            <button class="btn btn-success" type="submit">Terima Lamaran</button>
          </form>

          <form action="{{ url('hrd/lamaran/'.$value->id.'/tolak') }}" method="POST">
            @csrf
            <button class="btn btn-danger" type="submit">Tolak Lamaran</a>
          </form>

          @elseif ($value->status == 'Melanjutkan ke seleksi')
          <form action="{{ url('hrd/lamaran/'.$value->id.'/tinjau') }}" method="POST">
            @csrf
            <button class="btn btn-info" type="submit">Tinjau Kembali</button>
          </form>

          <form action="{{ url('hrd/lamaran/'.$value->id.'/tolak') }}" method="POST">
            @csrf
            <button class="btn btn-danger" type="submit">Tolak Lamaran</a>
          </form>
          @elseif ($value->status == 'Ditolak')
          <form action="{{ url('hrd/lamaran/'.$value->id.'/tinjau') }}" method="POST">
            @csrf
            <button class="btn btn-info" type="submit">Tinjau Kembali</button>
          </form>
              
          @endif

          
          
        </div>
      </div>
    </div>
  </div>
  @empty
  @endforelse
                  
@endsection