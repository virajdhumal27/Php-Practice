<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 5 | Factorial of number</title>
</head>
<body>
    <?php

    $n = 5;
    $ans = 1;
    for ($i=2; $i <= $n; $i++) { 
        $ans = $ans * $i;
    }

    echo "Factorial $n is $ans <br>";
    ?>
</body>
</html>