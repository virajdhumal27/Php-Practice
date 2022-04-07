<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 5 | Sorting an array</title>

</head>

<body>

    <form action="" method="post">
        <label>Enter the numbers:</label>
        <input type="text" name="arrText" placeholder="Enter comma separated values" />

        <br /><br />
        <input type="submit" name="sort" value="sort" />
        <br /><br />
    </form>

    <?php
    if (isset($_POST['sort'])) {
        $text = $_POST['arrText'];
        $arr = array_map('intval', explode(",", $text));
        $n = count($arr);

        echo "Before Sorting: <br/>";
        displayArray($arr);

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$i] > $arr[$j]) {
                    swap($arr, $i, $j);
                }
            }
        }
        echo "After Sorting: <br/>";
        displayArray($arr);
    }

    function swap(&$arr, $i, $j)
    {
        $arr[$i] = $arr[$i] ^ $arr[$j];
        $arr[$j] = $arr[$i] ^ $arr[$j];
        $arr[$i] = $arr[$i] ^ $arr[$j];
    }

    function displayArray(&$arr)
    {
        foreach ($arr as $key) {
            echo $key . "<br />";
        }
    }
    ?>

</body>

</html>