<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Practical 6</title>
    <style>
        table, input {
            font-size: 1.5rem;
            text-align: center;
        }
        .center {
            display: flex;
            justify-content: center;
        }

        .vertical-middle {
            margin-top: 10%;
        }
    </style>
</head>

<body>
    <?php
    $firstNumber = "";
    $secondNumber = "";
    $ans = "";

    if (isset($_POST['Add'])) {
        $firstNumber = $_POST['txtFirstNumber'];
        $secondNumber = $_POST['txtSecondNumber'];
        $ans = add($firstNumber, $secondNumber);
    } elseif (isset($_POST['Subtract'])) {
        $firstNumber = $_POST['txtFirstNumber'];
        $secondNumber = $_POST['txtSecondNumber'];
        $ans = subtract($firstNumber, $secondNumber);
    } elseif (isset($_POST['Multiply'])) {
        $firstNumber = $_POST['txtFirstNumber'];
        $secondNumber = $_POST['txtSecondNumber'];
        $ans = multiply($firstNumber, $secondNumber);
    } elseif (isset($_POST['Divide'])) {
        $firstNumber = $_POST['txtFirstNumber'];
        $secondNumber = $_POST['txtSecondNumber'];
        $ans = divide($firstNumber, $secondNumber);
    } elseif (isset($_POST['Module'])) {
        $firstNumber = $_POST['txtFirstNumber'];
        $secondNumber = $_POST['txtSecondNumber'];
        $ans = module($firstNumber, $secondNumber);
    } elseif (isset($_POST['Exponent'])) {
        $firstNumber = $_POST['txtFirstNumber'];
        $secondNumber = $_POST['txtSecondNumber'];
        $ans = exponent($firstNumber, $secondNumber);
    } elseif (isset($_POST['Average'])) {
        $firstNumber = $_POST['txtFirstNumber'];
        $secondNumber = $_POST['txtSecondNumber'];
        $ans = average($firstNumber, $secondNumber);
    }



    function add($first, $second)
    {
        return $first + $second;
    }
    function subtract($first, $second)
    {
        return $first - $second;
    }
    function multiply($first, $second)
    {
        return $first * $second;
    }
    function divide($first, $second)
    {
        return $first / $second;
    }
    function module($first, $second)
    {
        return $first % $second;
    }
    function exponent($first, $second)
    {
        return $first ** $second;
    }
    function average($first, $second)
    {
        return ($first + $second) / 2;
    }
    ?>

    <h1 class="center vertical-middle">Arithmatic Operations</h1>



    <div class="center">

        <table border="0px solid black">


            <form action="" method="POST">
                <tr>
                    <td>
                        <label>Enter 1st number:</label>
                    </td>
                    <td>
                        <input type="text" name="txtFirstNumber" value="<?php echo $firstNumber; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter 2nd number:</label>
                    </td>
                    <td>
                        <input type="text" name="txtSecondNumber" value="<?php echo $secondNumber; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Result:</label>
                    </td>
                    <td>
                        <input type="text" name="txtAnswer" value="<?php echo $ans; ?>" />
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <input type="submit" style="padding: 5px 111px; margin-top: 5px;" name="Add" value="Add" />
                    </td>
                    <td>
                        <input type="submit" style="padding: 5px 99px; margin-top: 5px;" name="Subtract" value="Subtract" />
                    </td>
                </tr>

                <tr align="center">
                    <td>
                        <input type="submit" style="padding: 5px 92px;" name="Multiply" value="Multiply" />
                    </td>
                    <td>
                        <input type="submit" style="padding: 5px 110px;" name="Divide" value="Divide" />
                    </td>
                </tr>

                <tr align="center">
                    <td>
                        <input type="submit" style="padding: 5px 88px;" name="Module" value="Modulus" />
                    </td>
                    <td>
                        <input type="submit" style="padding: 5px 109px;" class="btn" name="Exponent" value="Power" />
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" style="padding: 5px 137px;" name="Average" value="Average" />
                    </td>
                </tr>

            </form>
        </table>
    </div>
</body>

</html>