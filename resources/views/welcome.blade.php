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
    </head>
    <body>
    @include('nav.nav')
    </body>
</html>
