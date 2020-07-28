<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
    </head>
    <body>

        {{--   header    --}}
        @include('elems.header')
        @yield('content')
        <hr>
        {{--    footer    --}}
    @include('elems.footer')
    </body>
</html>
