@extends('_HRDPage.dashboard.confirmDoc')

@section('CheckDoc_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('step-one-post') }}" method="POST" enctype="multipart/form-data">
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Pilih Foto Profile</label><br>
                            <div class="col-md-6 col-sm-6">
                                <img class="img-fluid mb-3" src="../../../img/image-preview.png" id="img-preview" style="height: 150px">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="img" onchange="document.getElementById('img-preview').src = window.URL.createObjectURL(this.files[0])">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>    
                        </div> --}}
                        
                        
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