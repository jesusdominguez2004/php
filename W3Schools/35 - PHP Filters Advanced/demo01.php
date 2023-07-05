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
    // Validate an Integer Within a Range
    $int = 122;
    $min = 1;
    $max = 200;

    // validar que es INT + validar rango ente 1 y 200...
    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
        echo("Variable value is not within the legal range");
    } else {
        echo("Variable value is within the legal range");
    }

    // Extra...
    $listaRango = array("options" => array("min_range" => $min, "max_range" => $max));
    echo "<br>";
    var_dump($listaRango);

    /*
        FILTER_VALIDATE_INT -> 257
        En vez de usar directamente el ID del filtro
        Usamos una constante que tiene como valor su int ID...
        filter_var(...) -> Filters a variable with a specified filter.
        Los filtros son para:
        Validating data = Determine if the data is in proper form.
        Sanitizing data = Remove any illegal character from the data
    */
?>

</body>
</html>