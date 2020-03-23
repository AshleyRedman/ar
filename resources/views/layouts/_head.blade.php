<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('meta/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('meta/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('meta/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('meta/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('meta/safari-pinned-tab.svg') }}" color="#ffffff">
    <link rel="shortcut icon" href="{{ asset('meta/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="{{ asset('meta/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Social -->
    <meta property="og:image" content="https://cloud.ardev.co.uk/ashredman/content/portfolio/og-image.jpg">
    <meta property="og:image:width" content="1669">
    <meta property="og:image:height" content="874">
    <meta property="og:title" content="Ash Redman">
    <meta property="og:description" content="UK Based Web Developer | WordPress &amp; Laravel">
    <meta property="og:url" content="https://ashredman.com">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://ashredman.com">
    <meta name="twitter:creator" content="@AJ_redman">
    <meta name="twitter:title" content="Ash Redman">
    <meta name="twitter:description" content="UK Based Web Developer | WordPress &amp; Laravel">
    <meta name="twitter:image" content="https://cloud.ardev.co.uk/ashredman/content/portfolio/og-image.jpg">

    <!--App  -->
    <meta name="author" content="Ash Redman">
    <meta name="keywords" content="Web Development, WordPress, Laravel">
    <meta name="description" content="@yield('meta_description', 'UK Based Web Developer | WordPress &amp; Laravel')">
    <title>@yield('meta_title', config('app.name', 'Ash Redman - Developer'))</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://rsms.me/inter/inter.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
