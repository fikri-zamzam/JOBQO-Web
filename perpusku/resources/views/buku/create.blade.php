@extends('style.main')


@section('container')

<div class="col-12">
    <form action="{{ url('buku') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Judul Buku</label>
            <input type="text" class="form-control" name="judulbuku" required
                    placeholder="Judul Buku">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Penulis Buku</label>
            <input type="text" class="form-control" name="penulisbuku" required
                    placeholder="Penulis Buku">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Penerbit Buku</label>
            <input type="text" class="form-control" name="penerbitbuku" required
                    placeholder="Penerbit Buku">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Tahun Terbit</label>
            <input type="number" class="form-control" name="tahunterbit" required
                    placeholder="Tahun Terbit">
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="/">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection