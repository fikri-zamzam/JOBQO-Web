@extends('style.main')


@section('container')

<div class="col-12">
    <form action="tambahpetugas" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Petugas</label>
            <input type="text" class="form-control" name="namapetugas" required
                    placeholder="Nama Petugas">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" required
                    placeholder="Jabatan">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">No. Hp Petugas</label>
            <input type="text" class="form-control" name="no.hp" required
                    placeholder="No. Hp Petugas">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Alamat Petugas</label>
            <input type="text" class="form-control" name="alamatpetugas" required
                    placeholder="Alamat Petugas">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="tambah">Simpan</button>
            <a href="/petugas">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection