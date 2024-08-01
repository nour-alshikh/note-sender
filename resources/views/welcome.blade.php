<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans flex justify-center items-center overflow-hidden h-screen">

    <div class="absolute top-0 right-0">
        @if (Route::has('login'))
        <livewire:welcome.navigation />
        @endif
    </div>


    <div class="flex flex-col justify-center items-center">
        <div class="w-8 mb-2">
            <x-application-logo />
        </div>
        <x-wireui-button href="{{ route('register') }}" class="bg-pink-500">
            Get Started
        </x-wireui-button>
    </div>
</body>

</html>