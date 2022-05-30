@extends('layouts.app')

@section('content')
<header class="headerdetail">

    <div class="overlaydetail"></div>
    <div class="container">
        @include('includes.navbar')

        <div class="header-content text-center">
            <h1 class="header-title">
                PT. Bentoel Group (Asmo Jember)
            </h1>
        </div>
    </div>
</header>
<div class="container">
    <div class="d-flex justify-content-center align-items-center logodetail">
        <img src="{{ url('images/company/bat.png') }}" width="70%" alt="">
    </div>
</div>

<div class="detail-title">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-8">
                <h2 class="sectiondetail-title text-white">
                    Software Engineer
                </h2>
            </div>
            <div class="col">
                <a href="#" class="btn btn-yellow float-lg-end mt-sm-3 mt-lg-0">lamar Sekarang</a>
            </div>
        </div>
        <div class="row gaji">
            <div class="col-md-2">
                <h6>Kisaran Gaji</h6>
            </div>
            <div class="col-md-8">
                <p>Rp 10.000.000 - Rp. 15.000.000</p>
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="deskripsi-pekerjaan">
    <div class="container">
        <h2 class="sectiondetail-title2 text-white mb-4">
            Deskripsi Pekerjaan
        </h2>
        <div class="row">
            <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla bibendum mollis diam, eget semper purus. Maecenas arcu dolor, maximus et augue vel, porttitor molestie ex. Proin non leo non nisi luctus sagittis sed vitae ipsum.</p>
            </div>
        </div>
    </div>
</div>

<div class="syarat-pekerjaan">
    <div class="container">
        <h2 class="sectiondetail-title2 text-white mb-4">
            Deskripsi Pekerjaan
        </h2>
        <ul>
            <li>Minimal 2 tahun bekerja sebagai software engineer</li>
            <li>Menguasai Bahasa PHP</li>
            <li>JAGO GOMBAL</li>
            <li>IYYADEH</li>
        </ul>
    </div>
</div>

<section class="joblist" id="joblist">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <h2 class="section-title text-white">
                Pekerjaan Serupa
            </h2>
        </div>

        <div class="row joblist-items">
            <div class="col-md-4">
                <div class="joblist-item">
                    <div class="container">
                        <div class="d-flex justify-content-center align-items-center logo">
                            <img src="{{ url('images/company/bat.png') }}" alt="">
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
                            <img src="{{ url('images/company/selma.png') }}" alt="">
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
                            <img src="{{ url('images/company/wismilak.png') }}" alt="">
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

<div class="container">
    <hr class="hrhr">
</div>




@endsection
