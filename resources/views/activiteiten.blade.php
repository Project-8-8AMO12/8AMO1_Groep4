
<?php
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Activiteiten</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet" type="text/css" >
    <script src="{{asset(mix('js/app.js')) }}"></script>

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

@include('nav.nav')

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
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
