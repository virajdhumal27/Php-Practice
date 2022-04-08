<!DOCTYPE html>
<?php
date_default_timezone_set("Asia/kolkata");
echo "This time is " . date("h:i:sa") . "<br /><br />";
$time = date('s');
$color = "";

if ($time == 4 || $time == 8 || $time == 2) {
    $color = "Red";
} elseif ($time == 1 || $time == 3 || $time == 7) {
    $color = "Green";
} else {
    $color = "Yellow";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 7</title>
</head>

<body style="background-color: <?php echo $color; ?>">

</body>

</html>