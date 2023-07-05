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
    // PHP - The __construct Function
    class Fruit {
        /*
            En este ejemplo usamos el constructor para definir los atributos
            pero es una mala prática... NO LO HAGAS...

            Mejor define los atributos fuera de los métodos
            en la mimsa clase:

            public $name;
            public $color;
        */
        function __construct($name, $color) {
            $this -> name = $name;
            $this -> color = $color;
        }

        function get_name() {
            return $this -> name;
        }

        function get_color() {
            return $this -> color;
        }
    }

    $apple = new Fruit("Apple", "red");
    echo $apple -> get_name();
    echo "<br>";
    echo $apple -> get_color();
?>

</body>
</html>