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

    // how to loop through the values of a PHP object
    // foreach cuando es un objeto JSON:
    $jsonobj = '{"Peter":35, "Ben":37, "Joe":43}';
    
    $obj = json_decode($jsonobj);

    foreach ($obj as $key => $value) {
        echo $key . " => " . $value . "<br>";
    }
   
    var_dump($obj);
?>

</body>
</html>