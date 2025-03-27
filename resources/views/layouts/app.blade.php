<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SAAMH 2023') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;500;600;700&family=Prompt:wght@400;500;600&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Noto Sans Thai', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-prompt {
            font-family: 'Prompt', sans-serif;
        }
    </style>

    <!-- Styles -->
    @vite('resources/css/app.css', 'resources/js/app.js')

</head>

<body>
    @include('components.navbar')
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
