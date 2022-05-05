<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 13 | Write a file</title>

    <style>
        * {
            background-color: #cce6ff;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 25px;
        }

        #btnSave {
            padding: 10px 100px;
            background-color: white;
            border-radius: 25px;
        }

        input, textarea {
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
        ?>
        <form method="POST">
            <label>File name (with extension): </label>
            <input type="text" name="fileName" /> <br /> <br />

            <label><b>Content</b></label><br />
            <p id="error-box"><?php echo $errorBox; ?></p>
            <textarea name="userText" cols="90" rows="10"></textarea><br /><br />

            <input type="submit" id="btnSave" name="save" value="SAVE" />
           
        </form>
       
        <?php
        // Practical 13
        if(isset($_POST['save'])) {
           

            $filename = $_POST['fileName'];

            $userText = $_POST['userText'];
            $file = fopen($filename, "w");

            if (!$file) {
                $errorBox = "Error in opening new/existing file <br />";
                exit();
            }
           
            fwrite($file, $userText);
            fclose($file);
        }
        ?>
    </body>
</html>