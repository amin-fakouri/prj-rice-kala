<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('bs/bs.css') }}">
    <link rel="stylesheet" href="{{ asset('animate_css/animat.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-image: url({{ asset('bg_reg_log/bg_reg_log.webp') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
{{ $slot }}
<script src="{{ asset('bs/bs.js') }}"></script>
</body>
</html>
