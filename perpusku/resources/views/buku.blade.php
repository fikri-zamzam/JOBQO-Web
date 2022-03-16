@extends('style.main')


@section('container')

{{-- table --}}
<a href="/tambahbuku" class="btn btn-primary mt-3"><i class="fas fa-plus-square mr-2"></i>Tambah Data {{ $title }}</a>
<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">Kode buku</th>
            <th scope="col">Judul</th>
            <th scope="col">penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">tahun terbit</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Test</th>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>
                <div class="row">
                    <div class="col-3">
                        <button class="btn btn-warning">Edit</button>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>


@endsection
