@extends('layouts.app')

@section('content')

<div class="job">
    <div class="container">
        @include('includes.navbar')
        <div class="header-content text-center">
            <h1 class="header-title">Cari Pekerjaan Idaman anda</h1>
            <form action="#" class="header-form d-flex align-items-center gap-3 bg-white p-4 rounded mt-5">
                <div class="icon">
                    <i class="bx bx-search fs-4"></i>
                </div>
                <input type="text" class="form-control border-0" placeholder="Temukan jabatan, perusahaan dan lokasi">
                <button class="btn btn-yellow" type="submit">Cari Kerja</button>
            </form>
        </div>
    </div>
</div>

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
@endsection
