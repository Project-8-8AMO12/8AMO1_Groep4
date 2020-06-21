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
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet" type="text/css" >
    <script src="{{asset(mix('js/app.js')) }}"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        /*Font-awesome integration*/
        @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
        /*Google font integration*/
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        #contact{
            background-color:whitesmoke;
            font-family: 'Roboto', sans-serif;
        }

        #contact .well{
            margin-top:30px;
            border-radius:0;
        }

        #contact .form-control{
            border-radius: 0;
            border:2px solid #1e1e1e;
        }

        #contact button{
            border-radius:0;
            border:2px solid #1e1e1e;
        }

        #contact .row{
            margin-bottom:30px;
        }

        @media (max-width: 768px) {
            #contact iframe {
                margin-bottom: 15px;
            }

        }
    </style>
</head>
<body>
@include('nav.nav')
<section id="contact">
    <div class="container">
        <div class="well well-sm">
            <h3><strong>Contact ons</strong></h3>
        </div>

        <div class="row">
            <div class="col-md-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-md-5">
                <h4><strong>Contact ons</strong></h4>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="" value="" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="" value="" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="" value="" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit" name="button">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Voltooien
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@include('footer.footer')
</body>
</html>
