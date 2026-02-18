<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'E-SO9') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="flex flex-col" style="min-height: 100vh;">
        @include('partials.navbar')

        <main id="main-content" style="opacity: 0; transition: opacity 0.5s ease; flex-grow: 1;">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    <!-- Scripts for animations -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mainContent = document.getElementById('main-content');
            if(mainContent) {
                mainContent.style.opacity = '1';
            }
        });
    </script>
</body>
</html>
