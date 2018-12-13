<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

        <title>I Got Your Drink</title>
    </head>
    <body>
        
        @yield('navbar')
        @yield('content')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
