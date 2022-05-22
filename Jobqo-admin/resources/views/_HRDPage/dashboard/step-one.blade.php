@extends('_HRDPage.dashboard.confirmDoc')

@section('CheckDoc_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('step-one-post') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">Step 1: Formulir HRD</div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="idName">Nama lengkap <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="idName" name="name" required="required" value="{{ $hrd_doc->name ?? old('name') }}" class="form-control  ">
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="idUsername">Username <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="idUsername" name="username" required="required" value="{{ $hrd_doc->username ?? old('username') }}" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Gender <span>*</span></label>
                            <div class="col-md-6 col-sm-6 mt-2 ">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="lk" value="L">
                                    <label class="form-check-label" for="lk">
                                    Laki-laki
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="pr" value="P">
                                    <label class="form-check-label" for="pr">
                                    Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal lahir <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="birthday" class="date-picker form-control" name="tgl_lahir" value="{{ $hrd_doc->tgl_lahir ?? old('tgl_lahir') }}" required="required" type="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="idAlamat">Alamat <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea class="form-control" name="alamat" id="idAlamat" >{{ $hrd_doc->alamat ?? old('alamat') }}</textarea>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="idEmail" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="idEmail" class="form-control col" type="email" value="{{ $hrd_doc->email ?? old('email') }}" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="password1">Password <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" id="password1" name="password" required="required" class="form-control  ">
                            </div>
                        </div>   --}}
                        
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection