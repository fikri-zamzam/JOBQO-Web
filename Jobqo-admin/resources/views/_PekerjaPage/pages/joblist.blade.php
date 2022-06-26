@extends('_PekerjaPage.layouts.app')
@section('content')

<div class="job">
    <div class="container">
        @include('_PekerjaPage.includes.navbar')
        <div class="header-content text-center">
            <h1 class="header-title">Cari Pekerjaan Idaman anda</h1>
            <form action="{{ url('/job/s/') }}" method="GET" class="header-form d-flex align-items-center gap-3 bg-white p-4 rounded mt-5">
                <div class="icon">
                    <i class="bx bx-search fs-4"></i>
                </div>
                <input type="text" class="form-control border-0" placeholder="Temukan jabatan, perusahaan dan lokasi" name="cari">
                <button class="btn btn-yellow" type="submit">Cari Kerja</button>
            </form>
        </div>
    </div>
</div>

<section class="joblist" id="joblist">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            @if(!$jobs->isEmpty())
            <h2 class="section-title text-white text-center">
                Rekomendasi untuk anda
            </h2>
            @endif
        </div>

        <div class="row joblist-items">
            @forelse ($jobs as $key=>$value)
            <div class="col-md-4">
                <div class="joblist-item">
                    <div class="container">
                        <div class="d-flex justify-content-center align-items-center logo">
                            <img src="{{ asset('img/'.$value->AsalJob->img_logo) }}" alt="">
                        </div>
                        <a href="{{ url('job/detail/'.$value->id) }}">
                            <div class="content">
                                <h3>{{ $value->name_job }}</h3>
                                <p>{{ $value->AsalJob->name_company }}</p>
                                <hr>
                                <div class="desc">
                                    <p>Posted 4 days ago · Apply before 19 Apr
                                    Recruiter was hiring 21 hours ago</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <h3 class="text-center" style="color: white">Kami tidak dapat menemukan Lowongan yang anda cari </h3>
            <h5 class="text-center mt-2" style="color: rgba(226, 220, 220, 0.678)">Pastikan ejaan yang anda tulis dengan benar </h5>

            @endforelse
        </div>
    </div>
</section>
@endsection
