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
        Usa self::$staticProp para acceder dentro de un método de la clase a su Static Properties.
        Usa "parent" para acceder Static Properties de clase padre en una clase hijo...
    */

    class pi {
        public static $value = 3.14159;
    }

    class x extends pi {
        public function xStatic() {
            return parent::$value;
        }
    }

    // propiedad estática desde clase padre
    echo x::$value; 

    // propiedad estática de clase padre desde clase hijo
    $x = new x();
    echo $x->xStatic();
?>

</body>
</html>