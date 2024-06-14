<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Deadline manager' }} | Write Dissertation</title>

    @include('inc.headerLinks')
    @yield('head')

    <!-- Scripts -->

</head>
<body>

        @yield('content')

        @include('inc.footerLinks')
</body>
</html>
