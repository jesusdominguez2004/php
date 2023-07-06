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
        PHP - The final Keyword
        Inheritance in OOP = When a class derives from another class.
        The child class will inherit all the public and protected properties and methods from the parent class. 
        In addition, it can have its own properties and methods.
        An inherited class is defined by using the extends keyword.
    */

    class Fruit {
        // también podemos usar final con functiones...
        final public function intro() {
            // some code...
        }
    }

    class Strawberry extends Fruit {
        // error si intentáramos sobrescribir el método...
        // public function intro() {
        //     // some code...
        // }
    }
?>

</body>
</html>