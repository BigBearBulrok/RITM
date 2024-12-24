<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{$title}}</title>

        <link rel="icon" href="{{ url('/ass/logoX-01.png') }}">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        @stack('head')
    </head>
    <body class="bg-black text-white">
        @include('components.navbar')
        @yield('body')
        @include('components.footer')
    </body>
    
    @stack('script')
</html>