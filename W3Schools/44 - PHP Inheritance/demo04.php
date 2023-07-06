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
        PHP - Overriding Inherited Methods
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
        public function intro() {
            echo "The fruit is {$this -> name} and the color is {$this -> color}.";    
        }
    }

    class Strawberry extends Fruit {
        public $weight;
        public function __construct($name, $color, $weight) {
            $this -> name = $name;
            $this -> color = $color;
            $this -> weight = $weight;
        }
        public function intro() {
            echo "The fruit is {$this -> name}, the color is {$this -> color}, and the weight is {$this -> weight} gram.";
        }
    }

    $strawberry = new Strawberry("Strawberry", "red", 50);
    $strawberry -> intro();
?>

</body>
</html>