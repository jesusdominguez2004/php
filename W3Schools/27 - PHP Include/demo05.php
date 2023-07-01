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

<h1>Welcome to my home page!</h1>
<?php
    // PHP include vs. require
    require 'noFileExists.php';
    echo "I have a $color $car.";
?>

</body>
</html>