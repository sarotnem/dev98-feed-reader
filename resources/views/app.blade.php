<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dev98 Feed Reader</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/paper-kit.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>

<body class="app-body">
    <div id="app"></div>

    <script src="{{ asset('js/core/jquery.min.js')}}"></script>
    <script src="{{ asset('js/core/popper.min.js')}}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/paper-kit.min.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>
