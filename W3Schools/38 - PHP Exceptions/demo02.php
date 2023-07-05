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
        The try...catch Statement
        An exception is an object that describes an error or unexpected behaviour of a PHP script.
    */

    // catch exceptions and continue the process.
    function divide($dividend, $divisor) {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide(5, 0);
    } catch(Exception $e) {
        echo "Unable to divide.";
    }
?>

</body>
</html>