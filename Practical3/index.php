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
        <form action="" method="post">
            <label>Enter a number:</label>
            <input type="text" name="input" />
            <input type="submit" name="submit" value="Submit" /><br /><br />
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $n = $_POST['input'];
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
        }

        ?>
    </div>
</body>

</html>