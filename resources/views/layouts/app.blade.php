<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased"
    style="background-image: url('/images/background.jpg'); background-size: cover; background-position: center;">
    <div class="min-h-screen">
        @include('layouts.navigation')
        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Alert Message -->
        @if (session('status'))
            <div class="max-w-2xl mx-auto mt-4">
                <div class="p-4 text-green-800 bg-green-100 border border-green-400 rounded-lg shadow-md 
                                        transition-opacity duration-500 ease-in-out opacity-100 hover:opacity-80">
                    <p class="text-lg text-center font-semibold text-gray-900 dark:text-white">{{ __(session('status')) }}
                    </p>
                </div>
            </div>
        @endif

        <main class="">
            {{ $slot }}
        </main>
    </div>
</body>


</html>