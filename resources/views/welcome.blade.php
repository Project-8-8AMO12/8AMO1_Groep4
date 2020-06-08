<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
        <title>@yield('title','Imkers')</title>
    </head>
    <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">

{{--            <h1 class="logo"><a href="index.html">Kelly</a></h1>--}}
            <!-- Uncomment below if you prefer to use an image logo -->
           <a href="index.html" class="logo"><img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid"></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/') }}">About</a></li>
                    <li><a href="{{ url('/') }}">Resume</a></li>
                    <li><a href="{{ url('/') }}">Services</a></li>
                    <li><a href="{{ url('/') }}">Portfolio</a></li>
                    <li><a href="{{ url('/') }}">Contact</a></li>
                </ul>
            </nav><!-- .nav-menu -->

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>

        </div>
    </header><!-- End Header -->
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
