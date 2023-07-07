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
        PHP - Static Methods
        Los métodos estáticos se pueden llamar directamente, sin crear primero una instancia de la clase.
        Usar "::" para acceder a static function...
        ClassName::staticMethod();
    */

    class ClassName {
        public static function staticMethod() {
            echo "Hello World!";
        }
    }
?>

</body>
</html>