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
    // PHP - The __destruct Function
    class Fruit {
        public $name;
        public $color;

        // al instanciar el objeto...
        function __construct($name) {
            $this -> name = $name;
        }

        // al terminar la instancia del objeto...
        function __destruct() {
            echo "The fruit is {$this -> name}.";
        }
    }

    $apple = new Fruit("Apple");
?>

</body>
</html>