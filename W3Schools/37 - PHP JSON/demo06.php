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
        PHP - Accessing the Decoded Values
        PHP has some built-in functions to handle JSON.
        JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
    */

    // how to access the values from a PHP associative array
    // en caso de que solo tengamos el array:
    $jsonobj = '{"Peter":35, "Ben":37, "Joe":43}';
    
    $arr = json_decode($jsonobj, true);

    echo $arr["Peter"];
    echo $arr["Ben"];
    echo $arr["Joe"];

    echo "<br>";
    var_dump($arr);
?>

</body>
</html>