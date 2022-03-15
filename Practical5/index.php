<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 5 | Sorting an array</title>
    <style>
        * {
            font-size: 30px;
        }
    </style>
</head>

<body>

    <?php

    $numbers = array(20, 10, 30, 0, 50);
    if (isset($_POST['sort'])) {
        sort($numbers);
    } elseif (isset($_POST['add'])) {
        $elementToInsert = $_POST['adddedElement'];
        // array_push($numbers, $elementToInsert);
        $numbers[] = $elementToInsert;
    }
    ?>

    <form action="" method="post">
        <p id="arrayElements">Array:
            <?php
            foreach ($numbers as $num) {
                echo "$num ";
            }
            ?>
        </p>

        <input type="submit" value="Sort" name="sort" />

        <p><input type="text" name="adddedElement"/>
        <input type="submit" value="Add" name="add" />
        </p>
    </form>

</body>

</html>