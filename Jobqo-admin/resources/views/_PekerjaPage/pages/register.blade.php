@extends('_PekerjaPage.layouts.auth')

@section('content')
<section class="register">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
                <div class="register-area text-center">
                    <h2 class="section-title text-white">
                        Daftar <span>Akun Kandidat</span>
                    </h2>
                    <p class="section-description">
                        Selamat datang di Jobqo, Mohon isi kolom dibawah dengan teliti dan benar
                    </p>

                    <form action="{{ url('/register') }}" method="POST" class="register-form">
                        @csrf
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <input type="password" class="form-control" placeholder="Password" name="password">

                        <button class="btn btn-yellow w-100 d-block" type="submit">Daftar Akun</button>
                        <p class="section-description mt-3">Sudah punya akun? <a href="{{ url('/login') }}" class="text-orange">Masuk
                                sekarang juga</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <img src="{{ url('images/icons/layer-blur-2.svg') }}" alt="" class="layer-blur-1">
</section>
@endsection