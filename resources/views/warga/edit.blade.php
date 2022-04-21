@extends('layouts.master')
@section('content')
    <h1>{{ $title }} {{ $warga->nama }}</h1>
    <form action="/warga/{{ $warga->id }}" method="POST">
        @method('put')
        @csrf
        <input class="form-control" type="text" name="nama" placeholder="Nama" value="{{ $warga->nama }}"><br><br>
        <input class="form-control" type="text" name="nik" placeholder="Nik" value="{{ $warga->nik }}"><br><br>
        <input class="form-control" type="text" name="no_kk" placeholder="No KK" value="{{ $warga->no_kk }}"><br><br>
        <select name="jenis_kelamin" class="form-select">
            <option value="">--Pilih Jenis Kelamin--</option>
            <option value="L" @if ($warga->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
            <option value="P" @if ($warga->jenis_kelamin == 'P') selected @endif>Perempuan</option>
        </select><br><br>
        <textarea class="form-control" name="alamat" rows="10">{{ $warga->alamat }}</textarea><br><br>
        <input class="btn btn-primary" type="submit" value="save">
    </form>
@endsection
