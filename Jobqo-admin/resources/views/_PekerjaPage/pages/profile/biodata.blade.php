@extends('_PekerjaPage.layouts.app')

@section('content')
<div class="profile">
    <div class="container">
         @include('_PekerjaPage.includes.navbar')
        <div class="row">
            <div class="col-4">
                <div class="sidebar">
                    @include('_PekerjaPage.layouts.Profile_sidebar')
                </div>
            </div>

            <div class="col-8">
                <div class="content">
                    <div class="row justify-content-between">
                      <div class="col">
                          <h3>Biodata Applicant</h3> 
                      </div>
                      @if($see == 'disabled')
                        <div class="col-auto">
                          <a class="btn btn-info btn-sm" href="#">Ubah</a>
                        </div>
                      @endif
                  </div>
                    <hr>
                    <div class="row gap-5">
                      <div class="col-6">
                        <form action="{{ url('applicant/profile') }}" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                          @csrf
                          @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            </div>
                          @endif

                          @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                          <div class="form-group row-mt-2">
                            <label class="col label-align mt-2" for="idname">Nama Lengkap <span class="required"></span>
                            </label>
                            <div class="col mt-2">
                              <input type="text" id="idname" required="required" class="form-control" value="{{ $name }}" name="name" {{ $see }}>
                            </div>
                          </div>
                          <div class="form-group row-mt-2">
                            <label class="col label-align mt-2" for="id_username">Username <span class="required"></span>
                            </label>
                            <div class="col mt-2">
                              <input type="text" id="id_username" required="required" class="form-control" value="{{ $username }}" name="username" {{ $see }}>
                            </div>
                          </div>
                          <label for="genderLabel" class="col label-align mt-2 mb-2">Gender</label><br>
                          <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="lk" value="L" {{ $see }} {{ (( $gender == "L" ) ? "checked" : "" ) }}>
                              <label class="form-check-label" for="lk">
                                Laki-laki
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="pr" value="P" {{ $see }} {{ (( $gender == "P" ) ? "checked" : "" ) }}>
                              <label class="form-check-label" for="pr">
                                Perempuan
                              </label>
                          </div>
                          <div class="form-group row-mt-2">
                            <label class="col label-align mt-2" for="idEmail">Email <span class="required"></span>
                            </label>
                            <div class="col mt-2">
                              <input type="text" id="idEmail" required="required" class="form-control" value="{{ $email }}" name="email" {{ $see }}>
                            </div>
                          </div>
                          <div class="form-group row-mt-2">
                            <label class="col label-align mt-2" for="id_tglLahir">Tanggal Lahir <span class="required"></span>
                            </label>
                            <div class="col mt-2">
                              <input type="date" id="idTgl_lahir" required="required" class="form-control" value="{{ $tgl_lahir }}" name="tgl_lahir" {{ $see }}>
                            </div>
                          </div>
                          <div class="form-group row-mt-2">
                            <label class="col label-align mt-2" for="idAlamat">Alamat <span class="required"></span>
                            </label>
                            <div class="col mt-2">
                              <textarea style="resize: none" name="alamat" class="form-control" id="idAlamat" cols="37" rows="3" {{ $see }}>{{ $alamat }}</textarea>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="row-md-2">
                                <div class="col mt-3">
                                    <button type="submit" {{ $see }} class="btn btn-primary">Konfirmasi</button>
                                </div>
                            </div>
                          </div>
                      </div>
                      {{-- Foto Profile --}}
                      <div class="col mt-3">
                        <div class="">
                          <label class="col label-align" >Foto Profil <br>
                          @if ($img_profile != NULL)
                          <img class="mt-3" width="230px" height="230px" src="{{ asset('img/'.$img_profile) }}" id="img-preview" alt="..." >
                          @else
                          <img class="mt-3" width="230px" height="230px" src="{{ asset('img/image-preview.png') }}" id="img-preview" alt="..." >
                          @endif
                        </div>
                        <div class="mt-3">
                          <input type="file" class="custom-file-input" id="image" name="img" onchange="document.getElementById('img-preview').src = window.URL.createObjectURL(this.files[0])">


                          {{-- <button type="submit" {{ $see }} class="btn btn-primary">Edit gambar</button> --}}
                        </div>
                      </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection