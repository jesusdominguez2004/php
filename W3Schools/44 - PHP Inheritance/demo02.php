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
        PHP - Inheritance and the Protected Access Modifier
        Inheritance in OOP = When a class derives from another class.
        The child class will inherit all the public and protected properties and methods from the parent class. 
        In addition, it can have its own properties and methods.
        An inherited class is defined by using the extends keyword.
    */

    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this -> name = $name;
            $this -> color = $color;
        }
        protected function intro() {
            echo "The fruit is {$this -> name} and the color is {$this -> color}.";    
        }
    }

    class Strawberry extends Fruit {
        public function message() {
            echo "Am I a fruit or a berry? ";
        }
    }

    // Try to call all three methods from outside class
    $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
    $strawberry -> message(); // OK. message() is public
    $strawberry -> intro(); // ERROR. intro() is protected
?>

</body>
</html>