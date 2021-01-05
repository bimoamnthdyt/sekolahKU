@extends('layouts.homelayout')

@section('title','Home')

@section('header')
<!-- Header -->
<header class="bg-info py-5 mb-5">
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
    <div class="row">
        <div class="col-md-8 mb-5">
            <h2>What We Do</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi
                soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat
                explicabo, maiores!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni
                in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate.
                Voluptatum.</p>
            <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
        </div>
        <!-- <div class="col-md-4 mb-5">
            <h2>Contact Us</h2>
            <hr>
            <address>
                <strong>Start Bootstrap</strong>
                <br>3481 Melrose Place
                <br>Beverly Hills, CA 90210
                <br>
            </address>
            <address>
                <abbr title="Phone">P:</abbr>
                (123) 456-7890
                <br>
                <abbr title="Email">E:</abbr>
                <a href="mailto:#">name@example.com</a>
            </address>
        </div> -->
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
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
</footer>
@endsection
