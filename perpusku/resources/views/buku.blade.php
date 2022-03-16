@extends('style.main')


@section('container')

{{-- table --}}
<a href="/tambahbuku" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Data {{ $title }}</a>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Kode Buku</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun terbit</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <th scope="row">Test</th>
            <td>{{ $book->kode_buku }}</td>
            <td>{{ $book->judul_buku }}</td>
            <td>{{ $book->Penulis }}</td>
            <td>{{ $book->Penerbit }}</td>
            <td>{{ $book->Tahun_terbit }}</td>
            <td>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-warning">Edit</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
