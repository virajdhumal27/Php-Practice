<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 10</title>
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
        }

        table {
            margin-top: 150px;
            border: 1px solid black;
        }

        input,label,td,select {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: bold;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <?php
    $text = "";
    $concatText = "";
    $option = "";
    $answer = "";

    if (isset($_POST['btnSubmit'])) {
        $text = $_POST['txtString'];
        $concatText = $_POST['txtConcat'];

        // $dd stores value
        $dd = $_POST['dropdown'];

        switch ($dd) {
            case 0:
                $option = "String length";
                $answer = strlen($text);
                break;

            case 1:
                $option = "Word Count";
                $answer = str_word_count($text);
                break;

            case 2:
                $option = "Upper case";
                $answer = strtoupper($text);
                break;

            case 3:
                $option = "Lower case";
                $answer = strtolower($text);
                break;

            case 4:
                $option = "Trim";
                $answer = trim($text);
                break;

            case 5:
                $option = "Concatenate";
                $answer = $text."$concatText";
                break;

            case 6:
                $option = "Reverse";
                $answer = strrev($text);
                break;

            default:
                $option = "Please select operation";
                break;
        }
    }
    ?>

    <form action="" method="post">
        <table class="center">
            <tbody>
                <tr>
                    <td><label for="">Enter the String: </label></td>
                    <td>
                        <input type="text" name="txtString" value="<?php echo $text; ?>" />
                        <input type="text" id="concat" name="txtConcat"
                            placeholder="String to concatenate" value="<?php echo $concatText; ?>"
                            style="display: none;">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <select name="dropdown" id="dropdown" onchange="check()">
                            <option value="-1">Select</option>
                            <option value="0">String Length</option>
                            <option value="1">Word count</option>
                            <option value="2">UpperCase</option>
                            <option value="3">LowerCase</option>
                            <option value="4">Trim</option>
                            <option value="5">Concatenate</option>
                            <option value="6">Reverse</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="center" value="Submit" name="btnSubmit" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                            echo "$option: $answer";
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <script>
        function check() {
            let dropdown = document.getElementById("dropdown");
            let current_value = dropdown.options[dropdown.selectedIndex].value;

            txtBox = document.getElementById("concat");
            if(current_value == 5) {
                txtBox.style.display = "block";
            } else {
                txtBox.style.display = "none";
            }
        }
    </script>

</body>

</html>