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
    /*
        PHP include and require Statements
        require will produce a fatal error (E_COMPILE_ERROR) and stop the script
        include will only produce a warning (E_WARNING) and the script will continue
    
        include 'filename';
        require 'filename'
    */
    include 'vars.php';
    echo "I have a $color $car.";
?>

</body>
</html>