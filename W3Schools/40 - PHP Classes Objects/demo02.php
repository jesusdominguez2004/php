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
    }

    // Define Objects (Objects of a class are created using the new keyword):
    $apple = new Fruit();
    $banana = new Fruit();
    $apple -> set_name('Apple');
    $banana -> set_name('Banana');

    echo $apple -> get_name();
    echo "<br>";
    echo $banana -> get_name();
?>

</body>
</html>