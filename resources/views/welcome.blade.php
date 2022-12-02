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
        body{
            background-color: #FCEADE;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .block{
            background-color: white;
            width: 80%;
            height: 500px;
            display: flex;
            justify-content: center;
            border-radius: 10px;
            padding-top: 25px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }
        .main{
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }
    </style>
</head>

<body class="antialiased">
    @include('homepagina.navbar')
<div class="main">
    <div class="block">
    @include('homepagina.overzicht')
    </div>
</div>
    {{-- @include('homepagina.footer') --}}
</body>

</html>
