<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="/resources/views/Sommen/app.css" /> -->
    <title>Menu</title>
    <style>
        body {
            margin: 0px;
            background: url() no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .main-container {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }

        .sum-container {
            width: 80%;
            height: 500px;
            display: flex;
            justify-content: center;
            font-size: 2em;
            font-weight: bold;
            border-radius: 10px;
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