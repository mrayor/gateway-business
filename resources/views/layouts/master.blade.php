<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name','Gateway Business') }} - @yield('title')</title>
    <script src="https://kit.fontawesome.com/255076d293.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/favicon.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased text-gray-900 font-display">
    <div id="app">
        <header>
            @yield('header')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @yield('footer')
        </footer>

    </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>

</html>