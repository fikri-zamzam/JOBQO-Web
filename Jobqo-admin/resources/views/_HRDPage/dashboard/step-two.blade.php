@extends('_HRDPage.dashboard.confirmDoc')

@section('CheckDoc_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('step-two-post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">Step 2: Formulir Perusahaan</div>
  
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="idName">Nama Perusahaan <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="text" id="idName" name="name_company" required="required" value="{{ old('name_company') }}" class="form-control  ">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="idEmail" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input id="idEmail" class="form-control col" type="email" value="{{ old('email') }}" name="email">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="idAlamat">Alamat <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <textarea class="form-control" name="alamat" id="idAlamat" >{{ old('alamat') }}</textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="idKodepos">Kode Pos <span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-6 ">
                                  <input type="text" id="idKodepos" name="kode_pos" required="required" value="{{ old('kode_pos') }}" class="form-control " maxlength="6">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="idContact">Contact Perusahaan <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-6 ">
                                  <input type="text" id="idContact" name="contact" required="required" value="{{ old('contact') }}" class="form-control " maxlength="15">
                                </div>
                              </div>
  
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="idContact">Bidang Perusahaan <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-6 ">
                                  <select class="form-control" id="idSector" name="company_sector_id">
                                    @foreach ($CompanySector as $sector)
                                    <option value="{{ $sector->id }}">{{ $sector->nameSector }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
  
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="idContact">Jenis Perusahaan <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-6 ">
                                  <select class="form-control" id="idSector" name="company_type_id">
                                    @foreach ($CompanyType as $type)
                                    <option value="{{ $type->id }}">{{ $type->nameType }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
  
                              {{-- SELECT OPTION/ --}}
  
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="idWebsite">Website Perusahaan <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-6 ">
                                  <input type="text" id="idWebsite" name="website" required="required" value="{{ old('website') }}" class="form-control  ">
                                </div>
                              </div>
  
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-10 text-left">
                                <a href="{{ route('step-one-show') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-1 text-right">
                                <button type="submit" class="btn btn-primary">Finish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection