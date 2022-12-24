@extends('layouts.main')

@section('content')
    
<div class="row">
  <div class="card border border-primary shadow-0 mr-3" style="width: 17rem;">
    <div class="card-header">Jumlah JOB</div>
    <div class="card-body text-primary">
      <div class="row">
        <p class="card-title"><h1>{{ $job_total }}</h1></p>
        <div class="ml-auto" >
          <img class="img-fluid" style="display:block;" width="50px" height="50px" class="img-circle" src="{{ asset('img/suitcase.png') }}" />
        </div>
      </div>
    </div>
  </div>
  
  <div class="card border border-info shadow-0 mr-3" style="width: 17rem;">
    <div class="card-header">Jumlah Lamaran</div>
    <div class="card-body text-info">
      <div class="row">
        <p class="card-title"><h1>{{ $lamaran_total }}</h1></p>
        <div class="ml-auto" >
          <img class="img-fluid" style="display:block;" width="50px" height="50px" class="img-circle" src="{{ asset('img/resume.png') }}" />
        </div>
      </div>
    </div>
  </div>
</div>
    

  @endsection