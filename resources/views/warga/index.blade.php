@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>

                    <div class="card-body">
                        <a class="btn btn-primary btn-sm" href="{{ route('create') }}">Add Warga</a>
                        <table class="table table-over">
                            <th>
                            <td>Namaaaa</td>
                            <td>Noa Nik</td>
                            <td>No KK</td>
                            <td>Jenis Kelamin</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                            </th>

                            @foreach ($warga as $w)
                                <tr>
                                    <td>{{ $w->id }}</td>
                                    <td>{{ $w->nama }}</td>
                                    <td>{{ $w->nik }}</td>
                                    <td>{{ $w->no_kk }}</td>
                                    <td>{{ $w->jenis_kelamin }}</td>
                                    <td>{{ $w->alamat }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-success btn-sm" href="/warga/{{ $w->id }}/edit">Edit</a>
                                            |
                                            <form action="/warga/{{ $w->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
