@extends('layouts.main')

@section('title','Daftar Sekolah')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Daftar Sekolah</h1>

            <table class="table table-hover">
                <thead class="table table-primary">
                    <tr>
                        <th scope="col-1">#</th>
                        <th>Nama Sekolah</th>
                        <th>Tentang</th>
                        <th>Uang Masuk</th>
                        <th>Biaya Masuk</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sekolah as $sklh)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $sklh->nama_sekolah}}</td>
                        <td>{{ $sklh->tentang}}</td>
                        <td>{{ $sklh->uang_masuk}}</td>
                        <td>{{ $sklh->biaya_bulanan}}</td>
                        <td>{{ $sklh->alamat}}</td>
                        <td>{{ $sklh->kota}}</td>
                        <td>{{ $sklh->telepon}}</td>
                        <td>{{ $sklh->email}}</td>
                        <td>{{ $sklh->website}}</td>
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
