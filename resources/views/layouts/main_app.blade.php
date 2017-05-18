<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet'
          type='text/css'>
    <!----//webfonts---->
    <script src="/js/app.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
    <!---header---->
@yield('header')
<!--/header-->
@section('sidebar')
        <h1>First</h1>
@show
    <!--start main section-->
@yield('content')
<!--end main section-->

    <div class="footer">
        <div class="container">
            <p>Copyrights © 2017 Blog All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a>
            </p>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
