@extends('Sommen/index')

@section('Sommen')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Deel Sommen</title>
    </head>

    <body>
        <?php
        createSum();
        function createSum()
        {
            $value2 = rand(10, 100);
            $value1 = rand(1, $value2 - 1);
            $value3 = $value2 / $value1;
            if (is_float($value3)) {
                createSum();
            } else {
                echo $value2;
                echo ' / ';
                echo $value1;
                echo ' = ';
                echo $value3;
            }
        }
        
        ?>
    </body>

    </html>
@endsection
