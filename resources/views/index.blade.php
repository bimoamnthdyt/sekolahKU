@extends('layouts.homelayout')

@section('title','Home')

@section('header')
<!-- Header -->
<header class="py-6 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-white mt-5 mb-2">SEKOLAH<b>KU</b></h1>
                <p class="lead mb-5 text-white-50">SEKOLAHKU ini dibuat untuk memudahkan anda mencari informasi sekolah
                    yang anda cari!</p>
            </div>
        </div>
    </div>
</header>
@endsection


@section('container')

<div class="container">
    <div class="card-jenjang">
        <p class="title-jenjang">TK</p>
    </div>
    <div class="card-jenjang">
        <p class="title-jenjang">SD</p>
    </div>
    <div class="card-jenjang">
        <p class="title-jenjang">SMP/MI</p>
    </div>
    <div class="card-jenjang">
        <p class="title-jenjang">SMA/SMK</p>
    </div>



    <!-- endrow -->
    @foreach($sekolah as $sklh)
    <div class="row">
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
    <!-- endrow -->

</div>
@endsection

@section('footer')
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright © 2021 Sekolahku. All Rights Reserved.</p>
    </div>
    <!-- /.container -->
</footer>
@endsection
