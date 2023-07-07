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

    // Parent class
    abstract class Car {
        public $name;
        public function __construct($name) {
            $this -> name = $name;
        }
        abstract public function intro() : string; 
    }
    
    // Child classes
    class Audi extends Car {
        public function intro() : string {
            return "Choose German quality! I'm an {$this -> name}!"; 
        }
    }
    
    class Volvo extends Car {
        public function intro() : string {
            return "Proud to be Swedish! I'm a {$this -> name}!"; 
        }
    }
    
    class Citroen extends Car {
        public function intro() : string {
            return "French extravagance! I'm a {$this -> name}!"; 
        }
    }
    
    // Create objects from the child classes
    $audi = new Audi("Audi");
    echo $audi -> intro();
    echo "<br>";
    
    $volvo = new Volvo("Volvo");
    echo $volvo -> intro();
    echo "<br>";
    
    $citroen = new Citroen("Citroen");
    echo $citroen -> intro();
?>

</body>
</html>