<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ Vite::asset('resources/image/icon/simple_icon.png') }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@700,500,600,300,400&display=swap" rel="stylesheet">

    <style>
        .fixed {
            position: fixed;
            top: 0;
            left: 0;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-[#F9F9F9]">
        <x-landing-nav />
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <x-footer />
    </div>
    @stack('scripts')
</body>

</html>
