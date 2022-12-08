<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mathgame</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chewy&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap');

        html {
            background-color: #FCEADE;
        }
    </style>
</head>

<body class="antialiased">
    @include('homepagina.navbar')

    @include('homepagina.test')

    {{-- @include('homepagina.footer') --}}
</body>

</html>