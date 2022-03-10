@extends('style.main')


@section('container')

{{-- table --}}
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
