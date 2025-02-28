<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="32x32" href="https://laravel.com/img/favicon/favicon-32x32.png">
        <title>{{ $title ?? 'RoadhaRun' }}</title>

        <!-- Primary Meta Tags -->
        <title>Roadha Run 1446</title>
        <meta name="title" content="Roadha Run 1446" />
        <meta name="description" content="Ramadan Roadha Run 1446" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="134.209.152.100" />
        <meta property="og:title" content="Roadha Run 1446" />
        <meta property="og:description" content="Ramadan Roadha Run 1446" />
        <meta property="og:image" content="{{asset('images/roadharunmeta.jpg')}}" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="134.209.152.100" />
        <meta property="twitter:title" content="Roadha Run 1446" />
        <meta property="twitter:description" content="Ramadan Roadha Run 1446" />
        <meta property="twitter:image" content="{{asset('images/roadharunmeta.jpg')}}" />

        <!-- Meta Tags Generated with https://metatags.io -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="{{asset('css/theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>
    <body>
        {{ $slot }}

    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/theme.min.js')}}"></script>

    <script src="{{asset('js/password.js')}}"></script>
    </body>
</html>
