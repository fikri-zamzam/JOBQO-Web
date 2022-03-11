@extends('style.main')


@section('container')

{{-- table --}}
<a href="/tambahpetugas" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Data {{ $title }}</a>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nim</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Test</th>
            <td>1</td>
            <td>nama</td>
            <td>Test</td>
            <td>Test</td>
            <td>
                <div class="row">
                    <div class="col-2">
                        <button class="btn btn-warning">Edit</button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>


@endsection
