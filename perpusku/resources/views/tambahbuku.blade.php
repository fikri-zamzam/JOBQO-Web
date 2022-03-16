@extends('style.main')


@section('container')

<div class="col-12">
    <form action="/tambahBuku" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Kode Buku</label>
            <input type="text" class="form-control" name="kodebuku" required
                    placeholder="Kode Buku">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Judul Buku</label>
            <input type="text" class="form-control" name="judulbuku" required
                    placeholder="Judul Buku">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Penulis Buku</label>
            <input type="text" class="form-control" name="penulisbuku" required
                    placeholder="Penulis Buku">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Penerbit Buku</label>
            <input type="text" class="form-control" name="penerbitbuku" required
                    placeholder="Penerbit Buku">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tahun Terbit</label>
            <input type="number" class="form-control" name="tahunterbit" required
                    placeholder="Tahun Terbit">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="tambah">Simpan</button>
            <a href="/">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection