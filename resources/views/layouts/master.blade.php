<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ URL::asset('/img/Logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/aos.css') }}">
    <script type="text/javascript" src="{{ URL::asset('/js/aos.js') }}"></script>
</head>
<body id="@yield('id')">    
    @include('layouts/partials.navigation')    
    @yield('content')

<script type="text/javascript">
    AOS.init({
        duration : 1200,
    })
</script>
<script type="text/javascript" src="{{ URL::asset('/js/jquery-3.4.1.slim.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>