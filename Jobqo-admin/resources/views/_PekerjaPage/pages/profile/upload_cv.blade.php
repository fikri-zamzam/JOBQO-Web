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

            <div class="col">
                <div class="content">
                    <div class="row justify-content-between">
                        <div class="col">
                            <h3>Upload</h3> 
                        </div>
                        <div class="col-auto">
                        <a href="{{ asset('document/'.$cv_doc) }}" class="btn btn-info btn-sm" href="#">Lihat</a>
                        </div>
                    </div>
                    <hr>
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="row gap-5">
                        <div class="col">
                            <div class="mt-4 mb-3">
                                @error('cv_doc')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <h5>Nama File: {{ (($cv_name == NULL)? "*Belum ada file yang di upload" : $cv_name) }}</h5>
                            </div>
                            <div class="row-md-2">
                                <div class="col mt-3">
                                    <form action="{{ url('applicant/document/'.$id_user) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="old_doc" value="{{ $cv_doc }}">
                                        
                                    <input type="file" name="cv_doc" hidden id="btn_upload">
                                    <label class="btn btn-outline-primary btn-sm mt-4 mb-2" for="btn_upload">Pilih file ..</label><br>
                                    <span id="file-chosen">Belum ada file yang dipilih</span><br>
                                    <button class="btn btn-primary btn-sm mt-4" type="submit" >Upload file</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
const btn_upload = document.getElementById('btn_upload');
const fileChosen = document.getElementById('file-chosen');

btn_upload.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})
</script>

@endsection