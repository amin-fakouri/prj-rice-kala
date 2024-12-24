<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('bs/bs.css') }}">
        <link rel="stylesheet" href="{{ asset('animate_css/animat.css') }}">
        <link rel="stylesheet" href="{{ asset('scroll_animate/scroll_css.css') }}">
        <link rel="stylesheet" href="{{ asset('my_css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('iran_sans/style.css') }}">
        <link rel="stylesheet" href="{{ asset('alert/alert.js') }}">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="background-color: #e0e0e0">
    {{ $slot }}
    <script src="{{ asset('bs/bs.js') }}"></script>
    <script src="{{ asset('scroll_animate/scroll_js.js') }}"></script>
    <script src="{{ asset('alert/alert.js') }}"></script>
    <script>
        AOS.init();
    </script>

    </body>
</html>
