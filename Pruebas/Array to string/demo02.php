<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array to string | PHP</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>

<?php
    echo "<h2>Array to string | json_encode(...)| Pruebas</h2>";
    $array = array("a" => 1, "b" => 2, "c" => 3);
    $json = json_encode($array);
    echo "JSON String Array frutas: $json <br>";
    echo "Var dump Array frutas: ";
    var_dump($array);

    // Tip: Automatic Copyright Year
    echo "<br>";
    echo "&copy Jesús Alberto Domínguez Charris | 2023-" . date("Y");

    /*  
        Curiosidades:
        Arrays to string en for
        Arrays to string en foreach
        Arrays multimencional to string en for
        Arrays multimencional to string en foreach
    */
?>

</body>
</html>