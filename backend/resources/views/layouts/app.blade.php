<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="relative bg-gray-100 font['sans','system-ui','poppins']">
        @if (!request()->routeIs('login') && !request()->routeIs('register'))
            <div class="flex z-10 absolute w-full top-0 left-0">
                @livewire('header')
            </div>
            <div class="flex absolute w-[16%] top-0 left-0">
                @livewire('sidebar')
            </div>
            <div class="flex w-[84%] float-right">
                {{ $slot }}
            </div>
        @endif

        @livewireScripts
    </body>
</html>
