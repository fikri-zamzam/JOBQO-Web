@extends('style.main')


@section('container')

<div class="col-12">
    <form action="Kembalibuku" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Id Kembali</label>
            <input type="text" class="form-control" name="idpengembalian" required
                    placeholder="Id Kembali">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal_Kembali</label>
            <input type="text" class="form-control" name="tanggalpengembalian" required
                    placeholder="Tanggal Kembali">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Denda</label>
            <input type="text" class="form-control" name="denda" required
                    placeholder="Denda">
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
            <button class="btn btn-primary" type="submit" name="tambah">Simpan</button>
            <a href="/">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>
