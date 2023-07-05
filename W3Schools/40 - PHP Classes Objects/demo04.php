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
    // PHP - The $this Keyword
    class Fruit {
        public $name;
        function set_name($name) {
            $this -> name = $name;
        }
    }
    $apple = new Fruit();
    $apple -> set_name("Apple");

    echo $apple -> name;
?>

</body>
</html>