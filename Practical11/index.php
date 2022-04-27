<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 11</title>
</head>

<body>
    <?php
    $error = "";
    $name = "";
    $password = "";

    if (isset($_POST["submit_btn"])) {
        $name = $_POST['txtn'];
        $password = $_POST['password'];

        if (empty($name)) {
            $error .= "Please fill the Name<br/>";
        }

        if (empty($password)) {
            $error .= "Please fill the Password<br/>";
        }

        if ($name != "" and $password != "") {
            if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
                $error .= "Only alphabets and number are allowed<br/>";
            }

            if (strlen($password) <= 5) {
                $error .= "Password must be atleast 5 characters";
            } else {
                echo "Welcome, you have logged in successfully!";
            }
        }
    }
    ?>
    <h1>Login</h1>
    <form action="" method="POST">
        <label>Username:</label><br /><br />
        <input type="text" name="txtn" placeholder="Name" value="<?php echo $name ?>" /> <br /><br />

        <label>Password:</label><br /><br />
        <input type="password" name="password" placeholder="Password" value="<?php echo $password ?>" /> <br /><br />

        <input type="submit" name="submit_btn" value="SUBMIT" /><br /><br />
    </form>
    <?php
    echo $error;
    ?>
</body>

</html>