<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes Intro</title>
</head>

<body>


    <?php
    class Fruit
    {
        const FRUIT_MESSAGE = "Hi there, I'm fruit.";
        
        private $name;
        private $color;

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        function __destruct()
        {
            echo "The fruit is now destructed";
        }

        function set_name($name)
        {
            $this->name = $name;
        }

        function get_name()
        {
            return $this->name;
        }

        function set_color($color)
        {
            $this->color = $color;
        }

        function get_color()
        {
            return $this->color;
        }

        function __toString()
        {
            return "The name of fruit is " . $this->get_name() . " and color is " . $this->get_color() . "<br/>";
        }
    }

    $apple = new Fruit("Apple", "Red");
    echo nl2br($apple->get_name() . "\n" . $apple->get_color() . "\n");
    echo $apple->__toString()."<br/>";
    echo Fruit::FRUIT_MESSAGE.".<br/>";
    ?>
</body>

</html>