@extends('Sommen/index')

@section('Sommen')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Keer Sommen</title>
    </head>

    <body>

     <?php
    $value1 = rand(0, 10);
    $value2 = rand(0, $value1);
    $value3 = $value1 * $value2;
    
    echo $value1;
    echo ' X ';
    echo $value2;
    echo ' = ';
    echo $value3;
    ?>
    <form>
    Antwoord: <input type="number" id="ant" name="ant"><br>
    
    <input type="submit"></br>

    </form>


    <?php
    


    ?>

    </body>

    </html>
@endsection
