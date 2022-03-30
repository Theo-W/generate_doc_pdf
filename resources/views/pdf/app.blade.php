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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.2.0/styles/atom-one-dark.min.css" rel="stylesheet" />
    <style>
        .hljs {
            padding: 2em;
            border-radius: 5px;
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.2.0/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    hljs.initHighlightingOnLoad();

    function generatePDF() {
        const content = document.querySelector('#element')

        html2pdf().set({
            pagebreak: { mode: ['avoid-all', 'css', 'legacy'] }
        }).from(content).save()
    }
</script>
</body>
</html>
