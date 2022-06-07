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
                        <div class="col-3">
                            <div class="nama mt-5">
                                <h5>Nama :</h5>
                            </div>
                            <div class="notelp mt-5">
                                <h5>No Telepon :</h5>
                            </div>
                            <div class="email mt-5">
                                <h5>Email :</h5>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="alamat mt-5">
                                <h5>Alamat Anda:</h5>
                            </div>
                            <div class="aksi mt-5">
                                <div class="row">
                                    <div class="col-4">
                                    </div>
                                    <div class="col">
                                    </div>
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