@extends('Sommen/index')

@section('Difficulty')
    Niveau: EXPERT
@endsection

@section('Sommen')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Deel Sommen</title>
    </head>
    <style>
        .sommen-sum-container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            font-size: 5vh;
            color: black;
            font-weight: bold;
            background-color: #ff8a5b;
            border-radius: 100px;
            margin-left: 25%;
            margin-right: 25%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            user-select: none;
            font-family: "Happy Monkey", cursive;
            overflow: hidden;
        }

        .antwoord-sum-container {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }

        .Submit-btn {
            height: 25px;
            width: auto;
            padding: 5px;
            border: none;
            border-radius: 3px;
            background-color: #ff8a5b;
            margin-bottom: 65px;
            font-family: "Happy Monkey", cursive;
        }

        .Submit-btn:hover {
            scale: 1.05;
        }
    </style>

    <body>
        <div class="sommen-sum-container">
            <?php
            $output = createSum();
            ?>
        </div>
        <div class="antwoord-sum-container">
            <input type="text" class="input-field" placeholder="Antwoord" name="answer" id="answer" />
            <button type="submit" class="Submit-btn" id="btnCheckAntwoord" onclick="checkAntwoord()">
                Controleer
            </button>
        </div>
        <?php
        function createSum()
        {
            $value2 = rand(50, 200);
            $value1 = rand(1, $value2);
            $value3 = $value2 / $value1;
            if (is_float($value3)) {
                createSum();
            } else {
                echo $value2;
                echo ' ?? ';
                echo $value1;
                echo ' = ? ';
                echo "<div style='display:none;' id='antwoord'>" . $value3 . '</div>';
        
                return $value3;
            }
        }
        
        ?>
        <script>
            function checkAntwoord() {
                var inputAntwoord = document.getElementById("answer").value;
                var correctAntwoord = document.getElementById("antwoord").innerHTML;

                if (inputAntwoord == correctAntwoord) {
                    console.log("antwoord = goed");
                } else {
                    console.log("antwoord = fout");
                }
            }
        </script>
    </body>

    </html>
@endsection
