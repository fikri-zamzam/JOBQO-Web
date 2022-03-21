@extends('style.main')


@section('container')

<div class="col-12">
    <form action="{{ url('buku/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Judul Buku</label>
            <input type="text" class="form-control" name="judulbuku" required
                    placeholder="Judul Buku" value="{{ $model->judul }}">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Penulis Buku</label>
            <input type="text" class="form-control" name="penulisbuku" required
                    placeholder="Penulis Buku" value="{{ $model->pengarang }}">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Penerbit Buku</label>
            <input type="text" class="form-control" name="penerbitbuku" required
                    placeholder="Penerbit Buku" value="{{ $model->penerbit }}">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Tahun Terbit</label>
            <input type="number" class="form-control" name="tahunterbit" required
                    placeholder="Tahun Terbit" value="{{ $model->tahun_terbit }}">
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