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

    // los objetos tiene atributos:
    $jsonobj = '{"Peter":35, "Ben":37, "Joe":43}';
    
    $obj = json_decode($jsonobj);

    echo $obj -> Peter;
    echo $obj -> Ben;
    echo $obj -> Joe;

    echo "<br>";
    var_dump($obj);
?>

</body>
</html>