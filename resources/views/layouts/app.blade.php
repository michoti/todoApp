<!doctype html>

<html>

<head>

    <meta name="csrf_token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>  

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body style="width: 100vw; height: 100vh;">

    @yield('content')

</body>

</html>