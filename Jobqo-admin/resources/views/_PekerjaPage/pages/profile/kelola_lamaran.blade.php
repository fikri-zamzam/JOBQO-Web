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
                    <h3>Upload Lamaran</h3>
                    <hr>
                    <div class="row gap-5">
                        <div class="col-md-12">
                            <div class="nama mt-2">
                                <h5>Nama File:</h5>
                            </div>
                            <table class="table mt-5 table-sm" style="font-size: 11px">
                                <thead class="table-dark">
                                <th>Id Job</th>
                                <th>Nama Pekerjaan</th>
                                <th>Gaji</th>
                                <th>Perusahaan</th>
                                <th>Kategori </th>
                                <th>Aksi</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td scope="row"> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>
                                        <!-- <div class="col"> -->
                                            <form action="#" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="button" class="btn-sm btn-danger" style="font-size: 11px">X</button>
                                            </form>
                                        <!-- </div> -->
                                    </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="row-md-2">
                                <div class="col-md-5 mt-3">
                                    <a class="btn btn-primary" href="#">Edit</a>
                                </div>
                                <div class="col-md-5 mt-3">
                                    <a class="btn btn-info" href="#">Lihat</a>
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