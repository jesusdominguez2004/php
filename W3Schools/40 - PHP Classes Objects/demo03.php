<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>

<?php 
    // Define a Class
    class Fruit {
        // propiedades...
        public $name;
        public $color;

        // métodos...
        function set_name($name) {
            $this -> name = $name;
        }

        function get_name() {
            return $this -> name;  
        }

        function set_color($color) {
            $this -> color = $color;
        }

        function get_color() {
            return $this -> color;
        }
    }

    // Define Objects (Objects of a class are created using the new keyword):
    $apple = new Fruit();
    $apple -> set_name('Apple');
    $apple -> set_color('Red');
    echo "Name: " . $apple -> get_name();
    echo "<br>";
    echo "Color: " . $apple -> get_color();
?>

</body>
</html>