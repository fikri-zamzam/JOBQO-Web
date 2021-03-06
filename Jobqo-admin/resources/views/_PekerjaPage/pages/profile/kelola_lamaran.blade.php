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
                            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif
                            <table class="table mt-5 table-md" style="font-size: 11px">

                                <thead class="table-dark">
                                <th>No</th>
                                <th>Logo</th>
                                <th>Pekerjaan</th>
                                <th>Tanggal </th>
                                <th>Status </th>
                                <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @forelse ($lamaran as $key=>$value)
                                    <tr>
                                        <td scope="row"> {{ $key+1 }} </td>
                                        <td><img class="img-fluid" style="display:block;" width="50px" height="50px" class="img-circle" src="{{ asset('img/'.$value->Data_comp->img_logo) }}" /></td>
                                        <td>{{ $value->Data_job->name_job }} </td>
                                        <td>{{ $value->created_at->format('d - m - Y') }}</td>
                                        <td> {{ $value->status }}</td>
                                        <td>
                                            <!-- <div class="col"> -->
                                                <form action="{{ url('applicant/lamaran/'.$value->id) }}" method="POST"
                                                    onsubmit="return confirm('Apakah anda yakin ? lamaran anda akan dibatalkan')">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn-sm btn-danger" style="font-size: 11px">X</button>
                                                </form>
                                            <!-- </div> -->
                                        </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6"><h6 class="text-center">Anda Belum melamar pekerjaan</h6></td>
                                    </tr>
                                    @endforelse
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