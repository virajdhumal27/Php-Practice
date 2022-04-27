<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Practical 12</title>
</head>

<body>
    <?php

    // Just checking what button is clicked
    // If merge button is clicked then set arrays
    // else clear button is clicked so clear the input box
    if (isset($_POST['merge1']) || isset($_POST['merge2'])) {
        $input_arr1 = $_POST['arr1'];
        $input_arr2 = $_POST['arr2'];
    } else {
        $input_arr1 = "";
        $input_arr2 = "";
    }

    ?>


    <form method="POST" action="">
        <label>Enter first array:</label><br />
        <input type="text" name="arr1" placeholder="Enter comma seperated values" value="<?php echo $input_arr1; ?>" />

        <br /><br /><br />

        <label>Enter second array:</label><br />
        <input type="text" name="arr2" placeholder="Enter comma seperated values" value="<?php echo $input_arr2; ?>" />

        <br /><br /><br />

        <input type="submit" name="merge1" value="Merge with pre-defined function" />
        <input type="submit" name="merge2" value="Merge without pre-defined function" />
        <input type="submit" name="clear" value="Clear" />
        <br /><br /><br />
    </form>

    <?php
    if (isset($_POST['merge1']) || isset($_POST['merge2'])) {

        // Spilting the elements into arrays
        $arr1 = explode(",", $input_arr1);
        $arr2 = explode(",", $input_arr2);
        $merged_arr = array(); // making new empty array

        echo "First Array: ";
        display_array($arr1);
        echo "<br /><br />";

        echo "Second Array: ";
        display_array($arr2);
        echo "<br /><br />";

        if (isset($_POST['merge1'])) {
            // Using pre-defined function
            $merged_arr = array_merge($arr1, $arr2);
        } else {
            // Adding $arr1 elements to $merge_arr
            foreach ($arr1 as $value) {
                array_push($merged_arr, $value);
            }
    
            // Adding $arr2 elements to $merge_arr
            foreach ($arr2 as $value) {
                array_push($merged_arr, $value);
            }
        }

        echo "Merged Array: ";
        display_array($merged_arr);
    }

    function display_array(&$arr)
    {
        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++) {
            echo $arr[$i] . ", ";
        }

        echo $arr[$n - 1];
    }
    ?>
</body>

</html>