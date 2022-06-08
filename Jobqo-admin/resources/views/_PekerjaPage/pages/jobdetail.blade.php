@extends('_PekerjaPage.layouts.app')

@section('content')
<header class="headerdetail">

    <div class="overlaydetail"></div>
    <div class="container">
        @include('_PekerjaPage.includes.navbar')

        <div class="header-content text-center">
            <h1 class="header-title">
                {{ $model->AsalJob->name_company }}
            </h1>
        </div>
    </div>
</header>
<div class="container">
    <div class="d-flex justify-content-center align-items-center logodetail">
        <img src="{{ asset('storage/'.$model->AsalJob->img_logo) }}" width="70%" alt="">
    </div>
</div>

<div class="detail-title">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-8">
                <h2 class="sectiondetail-title text-white">
                    {{ $model->name_job }}
                </h2>
            </div>
            <div class="col">
                <form action="/apply_job/{{ $model->id }}" method="GET">
                    <button class="btn btn-yellow float-lg-end mt-sm-3 mt-lg-0">Lamar Sekarang</button>
                </form>
            </div>
        </div>
        <div class="row gaji">
            <div class="col-md-2">
                <h6>Kisaran Gaji</h6>
            </div>
            <div class="col-md-8">
                <p>{{ $model->rangeGaji->rupiah }}</p>
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
                <p>{{ $model->desk_job }}</p>
            </div>
        </div>
    </div>
</div>

<div class="syarat-pekerjaan">
    <div class="container">
        <h2 class="sectiondetail-title2 text-white mb-4">
            Persyaratan Pekerjaan
        </h2>
        <p>
            {!! $model->job_requirement !!}
        </p>
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
