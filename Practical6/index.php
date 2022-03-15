<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .btn {
                padding: 10px 20px;
            }
        </style>
    </head>
    <body>
        <?php
        $firstNumber = "";
        $secondNumber = "";
        $ans = "";
        
        if(isset($_POST['Add'])) {
            $firstNumber = $_POST['txtFirstNumber'];
            $secondNumber = $_POST['txtSecondNumber'];
            $ans = add($firstNumber, $secondNumber);
            
        } elseif(isset($_POST['Subtract'])) {
            $firstNumber = $_POST['txtFirstNumber'];
            $secondNumber = $_POST['txtSecondNumber'];
            $ans = subtract($firstNumber, $secondNumber);
            
        } elseif(isset($_POST['Multiply'])) {
            $firstNumber = $_POST['txtFirstNumber'];
            $secondNumber = $_POST['txtSecondNumber'];
            $ans = multiply($firstNumber, $secondNumber);
            
        } elseif(isset($_POST['Divide'])) {
            $firstNumber = $_POST['txtFirstNumber'];
            $secondNumber = $_POST['txtSecondNumber'];
            $ans = divide($firstNumber, $secondNumber);
            
        } elseif(isset($_POST['Module'])) {
            $firstNumber = $_POST['txtFirstNumber'];
            $secondNumber = $_POST['txtSecondNumber'];
            $ans = module($firstNumber, $secondNumber);
            
        } elseif(isset($_POST['Exponent'])) {
            $firstNumber = $_POST['txtFirstNumber'];
            $secondNumber = $_POST['txtSecondNumber'];
            $ans = exponent($firstNumber, $secondNumber);
            
        } elseif(isset($_POST['Average'])) {
            $firstNumber = $_POST['txtFirstNumber'];
            $secondNumber = $_POST['txtSecondNumber'];
            $ans = average($firstNumber, $secondNumber);
            
        }
        
        
        
        function add($first, $second) {
            return $first + $second;
        }
        function subtract($first, $second) {
            return $first - $second;
        }
        function multiply($first, $second) {
            return $first * $second;
        }
        function divide($first, $second) {
            return $first / $second;
        }
        function module($first, $second) {
            return $first % $second;
        }
        function exponent($first, $second) {
            return $first ** $second;
        }
        function average($first, $second) {
            return ($first + $second)/2;
        }
        ?>
        
        <h1>Arithmatic Operations</h1>
        
        <table>
            
        
            <form action="" method="POST">
                <tr>
                    <td>
                        <label>Enter 1st number</label>
                    </td>
                    <td>
                        <input type="text" name="txtFirstNumber" value="<?php echo $firstNumber; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter 2nd number</label>
                    </td>
                    <td>
                        <input type="text" name="txtSecondNumber" value="<?php echo $secondNumber; ?>" />
                    </td>                    
                </tr>
                <tr>
                    <td>
                        <label>Result</label>
                    </td>
                    <td>
                        <input type="text" name="txtAnswer" value="<?php echo $ans; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="btn" name="Add" value="+" />
                    </td>
                    <td>
                        <input type="submit" class="btn" name="Subtract" value="-" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" class="btn" name="Multiply" value="x" />
                    </td>
                    <td>
                        <input type="submit" class="btn" name="Divide" value="÷" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" class="btn" name="Module" value="%" />
                    </td>
                    <td>
                        <input type="submit" class="btn" name="Exponent" value="^" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="btn" name="Average" value="Average" />
                    </td>
                </tr>  
                
            </form>
        </table>
    </body>
</html>
