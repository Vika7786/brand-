<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">

        <!-- Для Apple устройств (iOS) -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.png') }}">

        <!-- Для Android/Chrome -->
        <link rel="manifest" href="{{ asset('favicon.png') }}">

        <!-- Старый формат .ico -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- Современные браузеры (PNG) -->
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">

<!-- Высокое разрешение (Retina, PWA, Android Chrome) -->
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.png') }}">
<link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon.png') }}">

<!-- Векторный favicon (SVG) для наилучшего качества на Retina-экранах -->
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon.png') }}">

<!-- Классический favicon (ICO) для старых браузеров -->
<link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

<!-- iOS Safari (Apple touch icon) -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.png') }}">

<!-- Progressive Web Apps (PWA) и Android Chrome -->
<link rel="manifest" href="{{ asset('favicon.png') }}">

<!-- Internet Explorer/Edge -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="msapplication-config" content="{{ asset('favicon.png') }}">

<!-- Firefox pinned tab -->
<link rel="mask-icon" href="{{ asset('favicon.png') }}" color="#ff0000">


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
