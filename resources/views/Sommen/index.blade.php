<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="/resources/views/Sommen/app.css" /> -->
    <title>Menu</title>
    <style>
        html {
            background: url("/images/achtergrond.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body {
            margin: 0px;

        }

        .main-container {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }

        .sum-container {
            background-color: white;
            width: 80%;
            height: 500px;
            display: flex;
            justify-content: center;
            font-size: 2.5em;
            font-weight: bold;
            border-radius: 10px;
            padding-top: 25px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
    </style>
</head>

<body>
    @include('homepagina.navbar')
    <div class="main-container">
        <div class="sum-container">
            @yield('Sommen')
        </div>
    </div>
</body>

</html>