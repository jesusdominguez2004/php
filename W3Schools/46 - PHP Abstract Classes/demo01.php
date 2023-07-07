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
        PHP - What are Abstract Classes and Methods?
        Las clases y métodos abstractos son cuando la clase principal tiene un método con nombre, 
        pero necesita su(s) clase(s) secundaria(s) para completar las tareas.
    */

    // clase abstracta...
    abstract class ParentClass {
        // método abstracto se declara, pero no implementa instrucciones...
        abstract public function someMethod1();
        abstract public function someMethod2($name, $color);
        abstract public function someMethod3() : string;
    }
?>

</body>
</html>