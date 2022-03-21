@extends('style.main')


@section('container')

{{-- table --}}
<a href="{{ url('petugas/create') }}" class="btn btn-primary mt-3"><i class="fas fa-plus-square mr-2"></i>Tambah Data {{ $title }}</a>
<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Jabatan</th>
            <th scope="col">No HP</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($petugas as $key=>$value)
        <tr>
            <th scope="row">{{ $value->id }}</th>
            <td>{{ $value->nama_petugas }}</td>
            <td>{{ $value->jabatan }}</td>
            <td>{{ $value->no_hp }}</td>
            <td>{{ $value->alamat_petugas }}</td>
            <td>
                <div class="row">
                    <div class="col-3">
                        <a class="btn btn-warning" href="{{ url('petugas/'.$value->id.'/edit') }}" role="button">Edit</a>
                    </div>
                    <div class="col-3">
                        <form action="{{ url('petugas/'.$value->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>


@endsection
