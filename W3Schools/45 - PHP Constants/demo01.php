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
        PHP - Class Constants
        A class constant is declared inside a class with the const keyword.
        We can access a constant from outside the class by using the class name 
        followed by the scope resolution operator (::) followed by the constant name.
    */

    class Goodbye {
        const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    }

    echo Goodbye::LEAVING_MESSAGE;
?>

</body>
</html>