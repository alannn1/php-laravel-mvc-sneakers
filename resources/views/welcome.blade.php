<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @include('cdn')
        <link rel="stylesheet" type="text/css" href="{{ url('first.css') }}">

    </head>
    <body>
    <div class="bg">
        <br><br><br><br><br><br><br><br>
        <p align="center">
        <button type="button" class="btn btn-outline-secondary"><a href="{{ url('login') }}">Login</a></button>
        </p>
    </div>
    </body>
</html>
