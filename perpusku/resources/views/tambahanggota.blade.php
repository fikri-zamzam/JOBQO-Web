@extends('style.main')


@section('container')

<div class="col-12">
    <form action="tambahdatatutor.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Anggota</label>
            <input type="text" class="form-control" name="nama_anggota" required
                    placeholder="Nama Anggota">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jenis Kelamin</label><br>
            <input type="radio" name="gender" value="L">Laki-Laki <br>
            <input type="radio" name="gender" value="P">Perempuan
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Alamat</label>
            <input type="text" class="form-control" name="alamat" required
                    placeholder="Alamat">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="tambah">Simpan</button>
            <a href="/anggota">
                <button class="btn btn-danger" type="button" name="kembali">Kembali</button>
            </a>
        </div>
    </form>
</div>

@endsection