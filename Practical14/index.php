<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 14 | Read a file</title>

    <style>
        * {
            background-color: #ccffff;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 25px;
        }

        #btnSave {
            padding: 10px 100px;
            background-color: white;
            border-radius: 25px;
        }

        input {
            background-color: white;
        }

        #error-box {
            color: red;
        }
    </style>
</head>
<body>
        <?php 
        $errorBox = "";
        $fileText = "";
        ?>
        <form method="POST">
            <label>File name (with extension): </label>
            <input type="text" name="fileName" /> <br /> <br />

            <input type="submit" id="btnSave" name="open" value="OPEN" /><br /><br />

            <label><b>Content</b></label><br />
            <p id="error-box"><?php echo $errorBox; ?></p><br />
           
        </form>
       
        <?php
        // Practical 13
        if(isset($_POST['open'])) {
           

            $filename = $_POST['fileName'];
            $file = fopen($filename, "r");

            if (!$file) {
                $errorBox = "Error in opening new/existing file <br />";
                exit();
            }
           
            $fileText = fread($file, filesize($filename));
            echo $fileText;
            fclose($file);
        }
        ?>
    </body>
</html>