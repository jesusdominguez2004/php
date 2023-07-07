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

    class Welcome {
        use message1;
    }

    $obj = new Welcome();
    $obj -> msg1();
?>

</body>
</html>