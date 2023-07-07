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
    /* 
        PHP - What are Traits?
        PHP solo admite herencia simple: una clase secundaria solo puede heredar de un solo padre.
        Entonces, ¿qué pasa si una clase necesita heredar múltiples comportamientos? 
        Los rasgos OOP resuelven este problema...
    */

    trait message1 {
        public function msg1() {
            echo "OPP is fun! ";
        }
    }

    trait message2 {
        public function msg2() {
            echo "OPP reduces code duplication!";
        }
    }

    class Welcome {
        use message1;
    }

    class Welcome2 {
        use message1, message2;
    }

    $obj = new Welcome();
    $obj -> msg1();
    echo "<br>";

    $obj2 = new Welcome2();
    $obj2 -> msg1();
    $obj2 -> msg2();
?>

</body>
</html>