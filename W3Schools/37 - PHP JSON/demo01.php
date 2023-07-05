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
        PHP - json_encode()
        PHP has some built-in functions to handle JSON.
        JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
    */

    // how to encode an associative array into a JSON object:
    $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
    echo json_encode($age);
?>

</body>
</html>