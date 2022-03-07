<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concept | If else</title>
</head>
<body>

    <?php
    // Place if else explaination here and an example

    /**
     * If else statement works on a condition.
     * If a condition is true then the 'if' block is executed.
     * If the condition is false, the program searches for nearest else block, if present.
     * 
     * Else cannot exist it-self, there has to be atleast one if-statement.
     * 
     * Syntax:
     * if(condition) {
     *      //code
     * } else {
     *      //code
     * }
     */

    $number = 10;

    // If number is even
    if ($number % 2 == 0) {
        echo "The number $number is Even.";
    } else {
        echo "The number $number is Odd.";
    }
    

    ?>
</body>
</html>