<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="/resources/views/Sommen/app.css" /> -->
    <title>Menu</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chewy&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap');

        html {
            background-color: #29E2E6;
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
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .info-sum-container {
            display: flex;
            justify-content: space-between;

        }

        .sommen-sum-container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            font-size: 5vh;
            color: black;
            font-weight: bold;
            background-color: #FF8A5B;
            border-radius: 100px;
            margin-left: 25%;
            margin-right: 25%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            user-select: none;
            font-family: 'Happy Monkey', cursive;
        }

        .antwoord-sum-container {
            display: flex;
            justify-content: center;
            margin-top: 100px;

        }

        .input-field {
            height: 25px;
            margin-right: 5px;
            font-family: 'Happy Monkey', cursive;
        }

        .Submit-btn {
            height: 25px;
            width: 75px;
            padding: 5px;
            border: none;
            border-radius: 3px;
            background-color: #FF8A5B;
            margin-bottom: 65px;
            font-family: 'Happy Monkey', cursive;
        }

        .score {
            background-color: #FF8A5B;
            padding: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            user-select: none;
            color: black;
            font-family: 'Happy Monkey', cursive;
        }

        .niveau {
            background-color: #FF8A5B;
            padding: 10px;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            user-select: none;
            color: black;
            font-family: 'Happy Monkey', cursive;
        }

        .progress-bar-sum-container {
            width: 40%;
            height: 30px;
            background-color: red;
            margin-left: 30%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            user-select: none;

        }

        .grid {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
        }

        .box {
            width: auto;
            height: 30px;
            background-color: green;
        }
    </style>
</head>

<body>
    @include('homepagina.navbar')
    <div class="main-container">
        <div class="sum-container">
            <div class="info-sum-container">
                <div class="score">Score: [SCORE]</div>
                <div class="niveau">Niveau: [NIVEAU]</div>
            </div>
            <div class="sommen-sum-container">
                @yield('Sommen')
            </div>
            <div class="antwoord-sum-container">
                <form action="" method="post">
                    <input type="text" class="input-field" placeholder="Antwoord">
                    <button type="submit" class="Submit-btn">
                        Check
                    </button>
                </form>
            </div>
            <div class="progress-bar-sum-container">
                <div class="grid">
                    <div class="box"></div>
                    <div class="box2"></div>
                    <div class="box"></div>
                    <div class="box2"></div>
                    <div class="box"></div>
                    <div class="box2"></div>
                    <div class="box"></div>
                    <div class="box2"></div>
                    <div class="box"></div>
                    <div class="box2"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>