<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min Sommen</title>
</head>

<body>
    <?php
    $value1 = rand(0, 20);
    $value2 = rand(0, $value1);
    $value3 = $value1 - $value2;
    echo $value1;
    ?>
    <br>
    <?php

    echo $value2;
    ?>
    <br>
    <?php
    echo $value3;
    ?>
</body>

</html>