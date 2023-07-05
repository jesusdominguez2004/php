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
        Callback Functions
        A callback function (often referred to as just "callback") 
        is a function which is passed as an argument into another function.

        array_map(callback, array) -> Applies the callback to the elements of the given arrays.
        Puedes usar "[]" para arrays desde PHP 5.4.
        pero es mejor usar array() para más compatibilidad...
    */
    function my_callback($item) {
        return strlen($item);
    }

    $strings = ["apple", "orange", "banana", "coconut"];
    $lenghts = array_map("my_callback", $strings);
    print_r($lenghts); // devuelve un array de los resultados...

    echo "<br>";
    var_dump($lenghts);
?>

</body>
</html>