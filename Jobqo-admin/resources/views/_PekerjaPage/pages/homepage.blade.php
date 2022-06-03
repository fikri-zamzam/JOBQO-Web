@extends('_PekerjaPage.layouts.app')

@section('content')
<header class="header">
    <div class="overlay"></div>

    <div class="container">
        @include('_PekerjaPage.includes.navbar')

        <div class="header-content text-center">
            <h1 class="header-title">
                Untuk <span>Jember Yang <br>Lebih Baik</span>
            </h1>
            <p class="header-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus eget<br>leo sed
                faucibus.
                In pretium ante et nulla vulputate.
            </p>
            <form action="#" class="header-form d-flex align-items-center gap-3 bg-white p-4 rounded mt-5">
                <div class="icon">
                    <i class="bx bx-search fs-4"></i>
                </div>
                <input type="text" class="form-control border-0" placeholder="Temukan jabatan, perusahaan dan lokasi">
                <button class="btn btn-yellow"><a href="/job">Cari Kerja</a></button>

                {{-- <button class="btn btn-yellow" type="submit">Cari Kerja</button> --}}
            </form>
        </div>
    </div>
</header>

<div class="container">
    <div class="statistic">
        <div class="statistic-items d-flex align-items-center justify-content-center gap-5">
            <div class="statistic-item text-center">
                <h4 class="statistic-title">100<span>+</span></h4>
                <p class="statistic-subtitle">Perusahaan</p>
            </div>
            <hr class="inline">
            <div class="statistic-item text-center">
                <h4 class="statistic-title">550<span>+</span></h4>
                <p class="statistic-subtitle">List Pekerjaan</p>
            </div>
            <hr class="inline">
            <div class="statistic-item text-center">
                <h4 class="statistic-title">340<span>+</span></h4>
                <p class="statistic-subtitle">Pencari Kerja</p>
            </div>
        </div>
    </div>
</div>

<section class="services" id="services">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-8">
                <h2 class="section-title text-white">
                    Dapatkan kesempatan bekerja di <br><span>perusahaan terkenal</span>
                </h2>
            </div>
            <div class="col">
                <a href="#" class="btn btn-yellow float-lg-end mt-sm-3 mt-lg-0">Lihat Semua</a>
            </div>
        </div>

        <div class="row service-items">
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{ url('public_assets/images/gameloft-inc.jpg') }}" alt="">
                    <div class="content">
                        <p>Gameloft Inc</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{ url('public_assets/images/pt-indomarga.jpg') }}" alt="">
                    <div class="content">
                        <p>PT Indomarga</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{ url('public_assets/images/indomarco-inc.jpg') }}" alt="">
                    <div class="content">
                        <p>Indomarga Inc</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ url('public_assets/images/icons/layer-blur.svg') }}" alt="" class="layer-blur">
</section>

<section class="joblist" id="joblist">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <h2 class="section-title text-white text-center">
                Rekomendasi untuk anda
            </h2>
        </div>

        <div class="row joblist-items">
            <div class="col-md-4">
                <div class="joblist-item">
                    <div class="container">
                        <div class="d-flex justify-content-center align-items-center logo">
                            <img src="{{ url('public_assets/images/company/bat.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>Office Boy</h3>
                            <p>PT. Bentoel Group (Asmo Jember)</p>
                            <hr>
                            <div class="desc">
                                <p>Posted 4 days ago · Apply before 19 Apr
                                Recruiter was hiring 21 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="joblist-item">
                    <div class="container">
                        <div class="d-flex justify-content-center align-items-center logo">
                            <img src="{{ url('public_assets/images/company/selma.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>Office Boy</h3>
                            <p>PT. Bentoel Group (Asmo Jember)</p>
                            <hr>
                            <div class="desc">
                                <p>Posted 4 days ago · Apply before 19 Apr
                                Recruiter was hiring 21 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="joblist-item">
                    <div class="container">
                        <div class="d-flex justify-content-center align-items-center logo">
                            <img src="{{ url('public_assets/images/company/wismilak.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>Motion Designer</h3>
                            <p>PT. Bentoel Group (Asmo Jember)</p>
                            <hr>
                            <div class="desc">
                                <p>Posted 4 days ago · Apply before 19 Apr
                                Recruiter was hiring 21 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="superiorities" id="superiority">
    <div class="container">
        <h2 class="section-title text-white text-center">
            Keunggulan <span>menggunakan JOBQO</span>
        </h2>

        <div class="row superiority-items">
            <div class="col-md-4">
                <div class="superiority-item text-center">
                    <div class="icon">
                        <img src="{{ url('public_assets/images/icons/ic-message.svg') }}" alt="Koneksi Perusahaan">
                    </div>
                    <h4 class="title">Koneksi Perusahaan</h4>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus eget leo sed
                        faucibus.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="superiority-item text-center">
                    <div class="icon">
                        <img src="{{ url('public_assets/images/icons/ic-note-minus.svg') }}" alt="Koneksi Perusahaan">
                    </div>
                    <h4 class="title">Konsultasi Karir</h4>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus eget leo sed
                        faucibus.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="superiority-item text-center">
                    <div class="icon">
                        <img src="{{ url('public_assets/images/icons/ic-star.svg') }}" alt="Koneksi Perusahaan">
                    </div>
                    <h4 class="title">Event Perusahaan</h4>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus eget leo sed
                        faucibus.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="superiority-item text-center">
                    <div class="icon">
                        <img src="{{ url('public_assets/images/icons/ic-send.svg') }}" alt="Koneksi Perusahaan">
                    </div>
                    <h4 class="title">Penyesuaian Karir</h4>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus eget leo sed
                        faucibus.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="superiority-item text-center">
                    <div class="icon">
                        <img src="{{ url('public_assets/images/icons/ic-shield-check.svg') }}" alt="Koneksi Perusahaan">
                    </div>
                    <h4 class="title">Pelatihan Kerja</h4>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus eget leo sed
                        faucibus.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="superiority-item text-center">
                    <div class="icon">
                        <img src="{{ url('public_assets/images/icons/ic-presentation.svg') }}" alt="Koneksi Perusahaan">
                    </div>
                    <h4 class="title">Bursa Kerja</h4>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus eget leo sed
                        faucibus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="testimonial-image-area">
                    <img src="{{ url('public_assets/images/testimonial-image.png') }}" class="people-image" alt="Testimonial Photo">
                    <img src="{{ url('public_assets/images/icons/ic-quote.svg') }}" alt="Quote" class="quote-icon">

                    <div class="testimonial-title-area d-flex align-items-center justify-content-between">
                        <img src="{{ url('public_assets/images/testimonial-image-2.png') }}" class="other-image"
                            alt="Testimonial Image 2">
                        <div class="star-area">
                            <div class="stars d-flex align-items-center gap-2">
                                <img src="{{ url('public_assets/images/icons/ic-star-2.svg') }}" alt="Star">
                                <img src="{{ url('public_assets/images/icons/ic-star-2.svg') }}" alt="Star">
                                <img src="{{ url('public_assets/images/icons/ic-star-2.svg') }}" alt="Star">
                                <img src="{{ url('public_assets/images/icons/ic-star-2.svg') }}" alt="Star">
                                <img src="{{ url('public_assets/images/icons/ic-star-2.svg') }}" alt="Star">
                            </div>
                            <p class="title">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="testimonial-quote-area">
                    <h2 class="section-title text-white">
                        Dari <span>mereka yang sukses</span> mendapat pekerjaan ❤️
                    </h2>
                    <div class="stars d-flex align-items-center gap-2">
                        <img src="{{ url('public_assets/images/icons/ic-star-2.svg') }}" alt="">
                        <img src="{{ url('public_assets/images/icons/ic-star-2.svg') }}" alt="">
                        <img src="{{ url('public_assets/images/icons/ic-star-2.svg') }}" alt="">
                        <img src="{{ url('public_assets/images/icons/ic-star-2.svg') }}" alt="">
                        <img src="{{ url('public_assets/images/icons/ic-star-2.svg') }}" alt="">
                    </div>
                    <p class="quote">
                        “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur elit semper libero
                        commodo sagittis. In quis aliquet mauris, pellentesque ullamcorper purus. Curabitur ac
                        lobortis justo. Duis efficitur, nulla sed posuere posuere, est nulla tempor urna, in
                        ullamcorper mauris leo vel lectus “
                    </p>
                    <div class="people d-flex align-items-center gap-3">
                        <img src="{{ url('public_assets/images/neng-gelis.png') }}" alt="">
                        <div class="bio">
                            <h4>Neng Gelis</h4>
                            <p>Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ url('public_assets/images/icons/layer-blur.svg') }}" alt="" class="blur-1">
    <img src="{{ url('public_assets/images/icons/layer-blur.svg') }}" alt="" class="blur-2">
</section>

<div class="container mt-5">
    <div class="download">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-title">
                    Download aplikasi JOBQO untuk memudahkan anda
                </h2>
                <p class="section-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus eget leo sed
                    faucibus. In pretium ante et nulla vulputate.
                </p>

                <a href="#" class="d-inline-block google-play">
                    <img src="{{ url('public_assets/images/badge_playstore.png') }}" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <img src="{{ url('public_assets/images/phone.png') }}" class="phone" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
