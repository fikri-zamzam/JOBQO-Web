@extends('_PekerjaPage.layouts.auth')

@section('content')
<section class="register">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
                <div class="register-area text-center">
                    <h2 class="section-title text-white">
                        Masuk <span>Sebagai Kandidat</span>
                    </h2>
                    <p class="section-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus eget leo sed
                        faucibus. In pretium ante.
                    </p>

                    <form action="{{ url('/loginPost') }}" method="POST" class="register-form">
                        @csrf
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <input type="password" class="form-control" placeholder="Password" name="password">

                        <button class="btn btn-yellow w-100 d-block" type="submit">Login</button>
                        <p class="section-description mt-3">Belum punya akun? <a href="/register" class="text-orange">Daftar sekarang juga!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <img src="{{ url('images/icons/layer-blur-2.svg') }}" alt="" class="layer-blur-1">
</section>
@endsection