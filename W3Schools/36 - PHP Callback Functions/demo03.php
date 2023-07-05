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
        Callbacks in User Defined Functions
        A callback function (often referred to as just "callback") 
        is a function which is passed as an argument into another function.
    */

    function exclaim($str) {
        return $str . "! ";
    }

    function ask($str) {
        return $str . "? ";
    }

    function printFormatted($str, $format) {
        // llamando la $format callback function...
        echo $format($str);
    }

    printFormatted("Hello world", "exclaim");
    printFormatted("Hello world", "ask");
?>

</body>
</html>