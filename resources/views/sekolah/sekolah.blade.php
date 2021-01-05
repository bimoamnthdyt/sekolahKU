@extends('layouts.main')

@section('title','Daftar Sekolah')

@section('container')
<div class="container">
    <div style="padding-left: 100px;" class="row">
        <div class="col-11">
            <h1 style="text-align: center;" class="mt-5">Daftar Sekolah</h1>
            <div class="row mt-3 justify-content-center">
                <div class="col-md-7">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari sekolah" id="search-input">
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="button" id="search-button">Search</button>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($sekolah as $sklh)
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 mb-4">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('asset/img/sekolah1.jpg')}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $sklh->nama_sekolah}}</h4>
                            <p class="card-text">{{ $sklh->tentang}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('asset/img/sekolah1.jpg')}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $sklh->nama_sekolah}}</h4>
                            <p class="card-text">{{ $sklh->tentang}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('asset/img/sekolah1.jpg')}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $sklh->nama_sekolah}}</h4>
                            <p class="card-text">{{ $sklh->tentang}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('asset/img/sekolah1.jpg')}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $sklh->nama_sekolah}}</h4>
                            <p class="card-text">{{ $sklh->tentang}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('asset/img/sekolah1.jpg')}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $sklh->nama_sekolah}}</h4>
                            <p class="card-text">{{ $sklh->tentang}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('asset/img/sekolah1.jpg')}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $sklh->nama_sekolah}}</h4>
                            <p class="card-text">{{ $sklh->tentang}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
</footer>
@endsection
