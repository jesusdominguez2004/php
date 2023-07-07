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
        PHP - More on Static Methods
        Los métodos estáticos se pueden llamar directamente, sin crear primero una instancia de la clase.
        Usar "::" para acceder a static function...
        ClassName::staticMethod();
        Una clase puede tener métodos estáticos y no estáticos. 
        Se puede acceder a un método estático desde un método en la misma clase 
        usando la palabra clave "self" y dos puntos dobles (::):
    */

    class greeting {
        public static function welcome() {
            echo "Hello World!";
        }

        public function __construct() {
            self::welcome();
        }
    }

    new greeting();
?>

</body>
</html>