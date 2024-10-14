<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    {{-- Include Navbar --}}
    <x-navbar />

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Include Footer --}}
    @include('components.footer')

    {{-- Additional scripts --}}
    @stack('scripts')
</body>

</html>
