@extends('layouts.main')

@section('title','Daftar Guru')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Guru</h1>
            <table class="table">
                <thead class="table table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIPD</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($guru as $gru)
                    <tr>
                        <td class="row">{{ $loop->iteration}}</td>
                        <td>{{ $gru->nama}}</td>
                        <td>{{ $gru->nipd }}</td>
                        <td>{{ $gru->mapel}}</td>
                        <td>{{ $gru->email}}</td>
                        <td>
                            <a href="" class="badge bg-success">edit</a>
                            <a href="" class="badge bg-danger">delet</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
