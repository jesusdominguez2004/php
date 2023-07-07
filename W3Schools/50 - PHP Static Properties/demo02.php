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
        PHP - Static Properties
        Las propiedades estáticas se pueden llamar directamente, sin crear una instancia de una clase.
        ClassName::$staticProp;
    */

    class pi {
        public static $value = 3.14159;
    }

    echo pi::$value;
?>

</body>
</html>