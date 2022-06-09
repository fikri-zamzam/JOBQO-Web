@extends('_PekerjaPage.layouts.app')

@section('content')
<div class="profile">
    <div class="container">
         @include('_PekerjaPage.includes.navbar')
        <div class="row">
            <div class="col-4">
                <div class="sidebar">
                    <div class="user">
                        <div class="d-flex m-auto">
                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=580&q=80"
                                alt=""><p>Zamzam</p>
                        </div>
                        <hr class="hr-profile">
                    </div>
                    @include('_PekerjaPage.layouts.Profile_sidebar')
                </div>
            </div>

            <div class="col-8">
                <div class="content">
                    <h3>Biodata</h3>
                    <hr>
                    <div class="row gap-5">
                        <form action="" method="" class="form-horizontal form-label-left">
                          <div class="form-group row-mt-2">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="idname">First Name <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="idname" required="required" class="form-control" value="{{ $name }}" name="name" disabled>
                            </div>
                          </div>
                          <div class="form-group row-mt-2">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="id_username">Username <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="id_username" required="required" class="form-control" value="{{ $username }}" name="username" disabled>
                            </div>
                          </div>
                          <div class="form-group row-mt-2">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="idEmail">Email <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="idEmail" required="required" class="form-control" value="{{ $email }}" name="email" disabled>
                            </div>
                          </div>
                          <div class="form-group row-mt-2">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="idAlamat">Alamat <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea style="resize: none" name="alamat" class="form-control" id="idAlamat" cols="37" rows="3" disabled>jember kebonsari</textarea>
                            </div>
                          </div>
                        </form>
                        <div class="col-3">
                            <div class="row-md-2">
                                <div class="col mt-3">
                                    <button class="btn btn-primary">Edit data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection