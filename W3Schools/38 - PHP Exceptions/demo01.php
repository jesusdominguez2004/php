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
        Throwing an Exception
        An exception is an object that describes an error or unexpected behaviour of a PHP script.
    */

    // When an exception is thrown, the code following it will not be executed.
    // Uncaught Exception: Excepción no encontrada...
    function divide($dividend, $divisor) {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    echo divide(5, 0);
?>

</body>
</html>