<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 5 | Factorial of number</title>
</head>

<body>
    <h1>Factorial of a number.</h1>
    <form action="" method="post">
        <label>Enter a number:</label>
        <input type="text" name="input" />
        <input type="submit" name="submit" value="Submit" /><br /><br />
    </form>
    <?php

    if (isset($_POST['submit'])) {
        $n = $_POST['input'];
        $ans = 1;
        for ($i = 2; $i <= $n; $i++) {
            $ans = $ans * $i;
        }
    
        echo "Factorial of $n is $ans <br>";
    }
    ?>
</body>

</html>