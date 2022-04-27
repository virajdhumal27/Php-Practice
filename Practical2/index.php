<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 2 | Sum of digits</title>
</head>

<body>
    <div>
        <h1>Sum of digits</h1>

        <form action="" method="post">
            <label>Enter a number:</label>
            <input type="text" name="input" />
            <input type="submit" name="submit" value="Submit" /><br/><br/>
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $num = $_POST['input'];
            $n = $num;
            $result = 0;

            while ($n != 0) {
                $rem = $n % 10;
                $result += $rem;
                $n /= 10;
            }

            echo "Sum of digits of $num is ".$result;
        }
        ?>
    </div>
</body>

</html>