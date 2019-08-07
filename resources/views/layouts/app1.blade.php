<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EasyDonate</title>

    <link href="{{asset('bst/css/bootstrap.css')}}" rel="stylesheet">
    <script src="{{asset('bst/js/jquery.js')}}"></script>
    <script src="{{asset('bst/js/bootstrap.js')}}"></script>
    <script src="{{asset('js/request.js')}}"></script>
    <!-- Styles -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('fa/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="{{asset('css/nav_style.css')}}" rel="stylesheet">
    <link href="{{asset('css/nav_test.css')}}" rel="stylesheet">
    <link href="{{asset('css/request.css')}}" rel="stylesheet">
    <link href="{{asset('css/input_file.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Padauk:400,700&display=swap" rel="stylesheet">
</head>
<body>
<div id="app">
    <main >
        @yield('content')
    </main>
</div>
</body>
</html>
