@extends('style.main')


@section('container')

<div class="col-12">
    <form action="Pinjambuku" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Id Pinjam</label>
            <input type="text" class="form-control" name="idpeminjaman" required
                    placeholder="Id Pinjam">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal_Pinjam</label>
            <input type="text" class="form-control" name="tanggalpeminjaman" required
                    placeholder="Tanggal Pinjam">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Pengembalian</label>
            <input type="text" class="form-control" name="tanggalpengembalian" required
                    placeholder="Tanggal Pengembalian">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Id Buku</label>
            <input type="text" class="form-control" name="idbuku" required
                    placeholder="Id Buku">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Id Anggota</label>
            <input type="number" class="form-control" name="idanggota" required
                    placeholder="Id Anggota">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Id Petugas</label>
            <input type="number" class="form-control" name="idpetugas" required
                    placeholder="Id petugas">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="tambah">Pinjam</button>
            <a href="/">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

