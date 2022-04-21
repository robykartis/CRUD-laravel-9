@extends('layouts.master')
@section('content')
    <h1>Halaman Create Warga</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label class="form-lable">Masukan Nama</label><br>
        <input class="form-control" type="text" name="nama" placeholder="Nama"><br>
        <label class="form-lable">Masukan No NIK</label><br>
        <input class="form-control" type="text" name="nik" placeholder="Nik"><br>
        <label class="form-lable">Masukan No KK</label><br>
        <input class="form-control" type="text" name="no_kk" placeholder="No KK"><br>
        <label class="form-lable">Pilih Jenis Kelamin</label><br>
        <select class="form-select" name="jenis_kelamin">
            <option value="">--Pilih Jenis Kelamin--</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select><br>
        <label class="form-lable">Alamat</label><br>
        <textarea class="form-control" name="alamat" rows="10"></textarea><br><br>
        <input class="btn btn-primary" type="submit" value="save">
    </form>
@endsection
