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
        PHP - Looping Through the Values
        PHP has some built-in functions to handle JSON.
        JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
    */

    // how to loop through the values of a PHP associative array:
    // foreach cuando es un array del JSON:
    $jsonobj = '{"Peter":35, "Ben":37, "Joe":43}';
    
    $arr = json_decode($jsonobj, true);
    
    foreach ($arr as $key => $value) {
        echo $key . " => " . $value . "<br>";
    }

    var_dump($arr);
?>

</body>
</html>