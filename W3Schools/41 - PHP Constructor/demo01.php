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
    // PHP - The __construct Function
    class Fruit {
        public $name;
        public $color;

        function __construct($name) {
            $this -> name = $name;
        }

        function get_name() {
            return $this -> name;
        }
    }

    $apple = new Fruit("apple");
    echo $apple -> get_name();
?>

</body>
</html>