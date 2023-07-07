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
        PHP - More on Static Properties
        Las propiedades estáticas se pueden llamar directamente, sin crear una instancia de una clase.
        ClassName::$staticProp;
        Una clase puede tener propiedades tanto estáticas como no estáticas.
        Usa self::$staticProp para acceder dentro de un método de la clase a su Static Properties...
    */

    class pi {
        public static $value = 3.14159;
        public function staticValue() {
            return self::$value;
        }
    }

    $pi = new pi();
    echo $pi->staticValue();
?>

</body>
</html>