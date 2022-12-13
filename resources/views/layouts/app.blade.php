<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title-block')</title>

    <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{--        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">--}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@include('includes.header')

@if (Request::is("/"))
    @include('includes.hero')
@endif

<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
            @include('includes.aside')
        </div>
    </div>
</div>
@include('includes.footer')
</body>
</html>
