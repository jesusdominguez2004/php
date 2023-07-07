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

    trait TraitName {
        // some code...
    }

    class MyClass {
        use TraitName;
    }
?>

</body>
</html>