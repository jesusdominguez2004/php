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
    // Validate an Integer
    // Tip: filter_var() and Problem With 0
    $int = 0;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
        echo("Integer is not valid");
    }

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