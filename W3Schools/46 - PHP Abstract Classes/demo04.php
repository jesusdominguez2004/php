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
        PHP - More Abstract Class Examples
        Las clases y métodos abstractos son cuando la clase principal tiene un método con nombre, 
        pero necesita su(s) clase(s) secundaria(s) para completar las tareas.
    */

    abstract class ParentClass {
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass {
        public function prefixName($name, $separator = ".", $greet = "Dear") {
            if ($name == "John Doe") {
                $prefix = "Mr";
            } elseif ($name == "Jane Doe") {
                $prefix = "Mrs";
            } else {
                $prefix = "";
            }
            return "{$greet} {$prefix}{$separator} {$name}";
        }
    }

    $class = new ChildClass;
    echo $class -> prefixName("John Doe");
    echo "<br>";
    echo $class -> prefixName("Jane Doe");
?>

</body>
</html>