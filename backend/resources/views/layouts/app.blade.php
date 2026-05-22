<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @if ($profileWebsite) 
        <title>{{ $profileWebsite->name ?? "Name Brand"}}</title>
        <link rel="icon" href="{{ asset('storage/' . $profileWebsite->logo) }}" type="image/x-icon"/>
        @endif
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

        @livewireStyles
    </head>
    <body class="relative bg-gray-100 font['sans','system-ui','poppins'] select-none">
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
    @else
        {{-- tampilkan login --}}
        @yield('content')
    @endif

        @livewireScripts
    </body>
</html>
