<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url_current = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    @endphp
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:site_name" content="Opera Social Media Awards">
    <meta name="theme-color" content="#F7AE23">
   
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ config('app.url') }}/assets/images/Opera-Events-Logo.png"> 

    <meta name="description" content="The Opera Social Media Awards recognises and honours the great work performed by individuals on diverse social media platforms.">
    <meta property="og:title" content="{{ $title ?? 'Home' }} | Opera Social Media Awards">
    <meta property="og:description" content="The Opera Social Media Awards recognises and honours the great work performed by individuals on diverse social media platforms.">
   
    <title>{{ $title ?? 'Home' }} | Opera Social Media Awards</title>
	<link rel="canonical" href="{{$url_current}}" />

    @include('visitors.inc.head')
    @yield('head')

</head>
<body>

   @include('visitors.inc.header')
    <!--End Main Header -->
      @yield('content')
    <!-- Main Footer -->
   @include('visitors.inc.footer')
   @yield('script')

</body>
</html>
