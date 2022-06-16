@extends('_PekerjaPage.layouts.app')

@section('content')
<div class="profile">
    <div class="container">
         @include('_PekerjaPage.includes.navbar')
        <div class="row">
            <div class="col-4">
                <div class="sidebar">
                    @include('_PekerjaPage.layouts.Profile_sidebar')
                </div>
            </div>

            <div class="col-8">
                <div class="content">
                    <h3>Kelola Lamaran</h3>
                    <hr>
                    <div class="row gap-5">
                        <div class="col-md-12">
                            <table class="table mt-5 table-sm" style="font-size: 11px">

                                <thead class="table-dark">
                                <th>No</th>
                                <th>Logo</th>
                                <th>Pekerjaan</th>
                                <th>Tgl</th>
                                <th>Status </th>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection