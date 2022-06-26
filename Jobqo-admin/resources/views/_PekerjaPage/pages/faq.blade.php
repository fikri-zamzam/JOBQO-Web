@extends('_PekerjaPage.layouts.app')
@section('content')

<div class="job">
    <div class="container">
        @include('_PekerjaPage.includes.navbar')
        <div class="header-content text-center">
            <h1 class="header-title">FAQ</h1>
            <form action="{{ url('/faq/s/') }}" method="GET" class="header-form d-flex align-items-center gap-3 bg-white p-4 rounded mt-5">
                <div class="icon">
                    <i class="bx bx-search fs-4"></i>
                </div>
                <input type="text" class="form-control border-0" placeholder="Cari bantuan | Ketik masalah anda disini" name="cari">
                <button class="btn btn-yellow" type="submit">Cari Solusi</button>
            </form>
        </div>
    </div>
</div>

<section class="joblist" id="joblist">
    <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="row">
            @if($allFaq->isEmpty())
              <h3 class="text-center" style="color: white">Kami tidak dapat menemukan FAQ yang anda cari </h3>
              <h5 class="text-center mt-2" style="color: rgba(226, 220, 220, 0.678)">gunakan kata kunci sederhana atau konsultasi dengan kami melalui email</h5>
            @else
              @foreach($allFaq->chunk(ceil($allFaq->count()/2)) as $data)
                <div class="col-md-6">
                  @foreach ($data as $key=>$value)
                  <div class="accordion-item mt-2">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#list-faq-{{ $key }}" aria-expanded="false" aria-controls="list-faq-{{ $key }}">
                        {{ $value->soal }}
                      </button>
                    </h2>
                    <div id="list-faq-{{ $key }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                          {{ $value->jawaban }}
                      </div>
                    </div>
                  </div>
                  @endforeach       
                </div>
              @endforeach
              </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
