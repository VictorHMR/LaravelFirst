<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/inicial.css">
        <link rel="stylesheet" href="/css/inputs.css">
        <link rel="stylesheet" href="/css/tables.css">
    </head>

    <body>
    @yield('content')
    </body>

</html>