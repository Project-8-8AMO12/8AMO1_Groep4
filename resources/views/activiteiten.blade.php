
<?php
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Activiteiten</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>

<style>

    .column {
    float: left;
    width: 50%;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    blockquote {
        /*background: #f9f9f9;*/
        border-left: 5px solid #ffd73d;
        margin: 1.5em 10px;
        padding: 0.5em 10px;
        quotes: "\201C""\201D""\2018""\2019";
    }
    blockquote:before {
        color: #ffd73d;
        /*content: open-quote;*/
        font-size: 4em;
        line-height: 0.1em;
        margin-right: 0.25em;
        vertical-align: -0.4em;
    }
    blockquote p {
        display: inline;
    }

    .active {

        color: #ffd73d;
    }

</style>

{{--<nav class="navbar bg-dark">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="navbar-header">--}}
{{--            <a class="navbar-brand" href="#" style="color: black;">ImkersLeiden</a>--}}
{{--        </div>--}}
{{--        <ul class="nav navbar-nav">--}}
{{--            <li class="active"><a href="#" style="color: black; font-size: 20px; font-weight: bold;">Home</a></li>--}}
{{--            <li><a href="#" style="color: black; font-size: 20px; font-weight: bold;">Activiteiten</a></li>--}}
{{--            <li><a href="#" style="color: black; font-size: 20px; font-weight: bold;">Cursussen</a></li>--}}
{{--            <li><a href="#" style="color: black; font-size: 20px; font-weight: bold;">De Vereniging</a></li>--}}
{{--            <li><a href="#" style="color: black; font-size: 20px; font-weight: bold;">Zwerm gezien?</a></li>--}}
{{--            <li><a href="#" style="color: black; font-size: 20px; font-weight: bold;">Lid worden</a></li>--}}
{{--        </ul>--}}
{{--        <form class="navbar-form navbar-right" action="/action_page.php">--}}
{{--            <div class="input-group">--}}
{{--                <input type="text" class="form-control" placeholder="Search" name="search">--}}
{{--                <div class="input-group-btn">--}}
{{--                    <button class="btn btn-default" type="submit">--}}
{{--                        <i class="glyphicon glyphicon-search"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</nav><!--/.Navbar-->--}}
<nav class="navbar navbar-expand-lg navbar-light " style="height: 5vh; background-color: white;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item active" style="margin-left: 0.5vw; padding-left: 28vw;">
                <a href="#" style="color: black; font-size: 15px; font-weight: bold;">Agenda</a>
            </li>
            <li class="nav-item" style="margin-left: 0.5vw;  padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 15px; font-weight: bold;">Het Nieuws</a>
            </li>
            <li class="nav-item" style="margin-left: 0.5vw; padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 15px; font-weight: bold;">De Bijenstal</a>
            </li>
            <li class="nav-item" style="margin-left: 0.5vw; padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 15px; font-weight: bold;">De Winkel</a>
            </li>
            <li class="nav-item" style="margin-left: 0.5vw; padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 15px; font-weight: bold;">De Stertselaar</a>
            </li>
            <li class="nav-item" style="margin-left: 0.5vw; padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 15px; font-weight: bold;">Foto's en Video's</a>
            </li>
            <li class="nav-item" style="margin-left: 0.5vw; padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 15px; font-weight: bold;">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light " style="height: 12.5vh; background-color: white;">
    <a class="navbar-brand" href='#' style="padding-top: 10vh;"
    ><img src={{ URL::to('/') }}/images/logo.png height="250px" width="225px"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item " style="margin-left: 0.5vw; padding-left: 15vw;">
                <a href="#" style="color: black; font-size: 20px; font-weight: bold;">Home</a>
            </li>
            <li class="nav-item active" style="margin-left: 0.5vw;  padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 20px; font-weight: bold;" >Activiteiten</a>
            </li>
            <li class="nav-item" style="margin-left: 0.5vw; padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 20px; font-weight: bold;">Cursussen</a>
            </li>
            <li class="nav-item" style="margin-left: 0.5vw; padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 20px; font-weight: bold;">De Vereniging</a>
            </li>
            <li class="nav-item" style="margin-left: 0.5vw; padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 20px; font-weight: bold;">Zwerm gezien?</a>
            </li>
            <li class="nav-item" style="margin-left: 0.5vw; padding-left: 0.5vw;">
                <a href="#" style="color: black; font-size: 20px; font-weight: bold;">Lid worden</a>
            </li>
           </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
    <div class="content">
        <div class="title m-b-md" style="text-align: center; padding-top: 8vh; color: #9fb23a; ">
            <h1>Activiteiten Pagina</h1>
        </div>

        <div class="row" style="padding-top: 5vh;">
            <div class="column" style="padding-left: 1vw;"><blockquote>
                    @foreach($text as $texts)
                            <h1>{{ $texts->Titel }}</h1> <h2>{{ $texts->SubTitel }}</h2> <div>{{ $texts->Tekst }}</div>
                        @endforeach

                </blockquote></div>
            <div class="column">
                <form style="margin-right: 2vw;">
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="Input Date">Tijd van de activiteit</label>
                        <input type="date" id="birthday" name="birthday">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form></div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="page-footer font-small blue pt-4" style=" position: fixed;left: 0;bottom: 0;width: 100%;background-image: url({{ URL::to('/') }}/images/Groen-bijground.jpg;  )">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">Footer Content</h5>
                <p>Here you can use rows and columns to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#"> Imkersleiden</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
