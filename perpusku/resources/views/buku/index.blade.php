@extends('style.main')


@section('container')

{{-- table --}}
<a href="{{ url('buku/create') }}" class="btn btn-primary mt-3"><i class="fas fa-plus-square mr-2"></i>Tambah Data {{ $title }}</a>
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
        @foreach ($buku as $key=>$value)
        <tr>
            <th scope="row">{{ $value->id }}</th>
            <td>{{ $value->judul }}</td>
            <td>{{ $value->pengarang }}</td>
            <td>{{ $value->penerbit }}</td>
            <td>{{ $value->tahun_terbit }}</td>
            <td>
                <div class="row">
                    <div class="col-3">
                        <a class="btn btn-warning" href="{{ url('buku/'.$value->id.'/edit') }}">Edit</a>
                    </div>
                    <div class="col-3">
                        <form action="{{ url('buku/'.$value->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
