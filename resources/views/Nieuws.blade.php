<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:image" content="@yield('image')">
    <link href="{{ asset(mix('css/admin.css')) }}" rel="stylesheet" type="text/css" >
    <script src="{{asset(mix('js/app.js')) }}"></script>
</head>

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

<body>

@include('nav.nav')

<div class="container">
<div class="row" style="padding-top: 5vh;">
    <div class="column" style="padding-left: 1vw;">
        @foreach($text as $texts)
            <h1 style="color: #9fb23a">{{ $texts->Titel }}</h1> <h2 style="color: #ffd73d">{{ $texts->SubTitel }}</h2>
        @endforeach
            <blockquote>
            @foreach($text as $texts)
               <div>{{ $texts->Tekst }}</div>
            @endforeach

        </blockquote></div>
    <div class="column">

        <img src="{{asset('images/IMG-20190509-WA0020.jpg')}}" height='350px'>

    </div>





    </a>
</div>
    <div style="text-align: center; margin-top: 5vh; margin-bottom: 5vh; background-image: url('{{asset('images/bijenstuifmeel2.jpg')}}'); background-size: cover;height: 200px">
        <div>
                <a href="#" > <h2 style="color: white;">Nieuwe Buitenstal!!!</h2> </a>
                <p style="color: white;">De gemeente gaat Park Cronesteyn herinrichten</p>
                <button type="button" class="btn btn-warning">Lees meer</button>
         </div>

    </div>
</div>
</div>
@include('nav.footer')

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
