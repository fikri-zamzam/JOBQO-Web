@extends('layouts.main')

@section('content')

<div class="row">

  <div class="card text-white bg-primary mr-3" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Primary card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

  <div class="card text-white bg-danger mr-3" style="max-width: 18rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h5 class="card-title">Primary card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>


  <div class="card border border-primary shadow-0 mb-3" style="width: 18rem;">
    <div class="card-header">Jumlah JOB</div>
    <div class="card-body text-primary">
      <div class="row">
        <p class="card-title"><h1>{{ $job_total }}</h1></p>
        <div class="ml-auto" >
          <img class="img-fluid" style="display:block;" width="50px" height="50px" class="img-circle" src="{{ asset('img/user-profile.png') }}" />
        </div>
      </div>
      
      <p class="card-text">Jumlah JOB</p>
    </div>

</div>






@endsection