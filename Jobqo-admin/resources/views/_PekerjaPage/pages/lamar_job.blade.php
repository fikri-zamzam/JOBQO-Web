@extends('_PekerjaPage.layouts.app')

@section('content')
{{-- @include('_PekerjaPage.includes.navbar') --}}
<section class="register">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
                
                <div class="register-area">
                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                    </div>
                    @endif
                    <h2 class="section-title text-white text-center">
                        Konfirmasi <span>Lamaran</span>
                    </h2>
                    <p class="section-description text-center">
                        Tulis Resume dengan bahasa yang mudah dipahami dan pastikan <br> CV sudah terupload dengan benar
                    </p>

                    <form action="{{ url('/apply_job/post') }}" method="POST" class="register-form">
                        @csrf
                        @error('resume')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea name="resume" class="form-control" cols="30" rows="10" placeholder="Ceritakan sedikit tentang Diri Anda"></textarea>
                        <label style="color: white">Dokumen Cv</label>
                        <div class="mt-2">
                            <input type="text" class="form-control" value="{{ (($doc !== NULL) ? $doc : "Upload CV untuk melamar pekerjaan") }}" disabled>
                        </div>
                        
                        <button class="btn btn-yellow w-100 d-block" {{ (($doc !== NULL) ? '' : 'disabled') }} type="submit">Submit Lamaran</button>
                    </form>
                        
                </div>
            </div>
        </div>
    </div>

    <img src="{{ url('images/icons/layer-blur-2.svg') }}" alt="" class="layer-blur-1">
</section>
@endsection