<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/business-frontpage.css')}}" rel="stylesheet">

    <style>
        header {
            padding: 180px 14px;
           background-image: url(asset/img/bg.jpg);
        }
        .card-jenjang {
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 20px;
            width: 150px;
            margin-bottom: 30px;
            box-shadow: 1px 2px 5px;
            display: inline-block;
            margin-right: 20px;
            background-color: #4688c2;
        }

        .title-jenjang {
            margin-bottom: 0px;
            text-align: center;
        }

    </style>
    <title>@yield('title')</title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">SEKOLAH<b>KU</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/sekolah') }}">Daftar Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about')}}">About</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/guru') }}">Data Guru</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    @yield('header')

    @yield('card')

    @yield('container')

    @yield('footer')






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js')}}"> </script>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
