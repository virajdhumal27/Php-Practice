<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3 | Prime or Not</title>
</head>

<body>
    <div>
        <h1>Check a number is prime or not</h1>

        <?php
            $n = 11;
            $isPrime = true;
            $i = 2;

            while ($i < $n) {
                if ($n % $i == 0) {
                    $isPrime = false;
                    break;
                }
                $i++;
            }

            if ($isPrime) {
                echo 'The number ' . $n . ' is prime number';
            } else {
                echo 'The number ' . $n . ' is not prime number';
            }
        ?>
    </div>
</body>

</html>