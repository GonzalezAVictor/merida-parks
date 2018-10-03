<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/menu_style.css"> <!-- Resource style -->
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/modernizr.js"></script> <!-- Modernizr -->

        @yield('css')

        <!-- favicon -->
        <!-- <link rel="icon" type="image/png" href="{{Storage::url(setting('site.favicon'))}}" /> -->
    </head>
    <body>

        @yield('content')

        <!-- scripts -->
        <script src="/js/main.js"></script> <!-- Resource jQuery -->

        @yield('js')
        
        <script src="/js/app.js"></script>
    </body>
</html>
