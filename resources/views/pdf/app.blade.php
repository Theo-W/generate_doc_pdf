<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        pre {
            background-color: #B3B3B3FF;
            padding: .15em;
            border-radius: 2px;
        }

        table {
            width: 100% !important;
            border-collapse: collapse !important;
            display: table !important;
        }

        table td {
            min-width: 2em;
            padding: 16px 8px;
            border: 1px solid #B3B3B3FF;
        }
    </style>
</head>
<body>

<main class="container py-4">
    @yield('content')
</main>
</body>
</html>
