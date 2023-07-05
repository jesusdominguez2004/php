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
        PHP - Access Modifiers
        Properties and methods can have access modifiers which control where they can be accessed.
        public - the property or method can be accessed from everywhere. This is default.
        protected - the property or method can be accessed within the class and by classes derived from that class.
        private - the property or method can ONLY be accessed within the class.
    */

    class Fruit {
        public $name;
        protected $color;
        private $weight;
    }

    $mango = new Fruit();
    $mango -> name = 'Mango'; // OK
    $mango -> color = 'Yellow'; // ERROR
    $mango -> weight = '300'; // ERROR
?>

</body>
</html>