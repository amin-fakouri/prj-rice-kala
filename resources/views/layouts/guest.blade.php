<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @notifyCss
        <link rel="stylesheet" href="{{ asset('bs/bs.css') }}">
        <link rel="stylesheet" href="{{ asset('animate_css/animat.css') }}">
        <link rel="stylesheet" href="{{ asset('my_css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('iran_sans/style.css') }}">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    {{ $slot }}
    <script src="{{ asset('bs/bs.js') }}"></script>
    <x-notify::notify />
    @notifyJs
    </body>
</html>
