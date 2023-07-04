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
    // Sanitize and Validate a URL
    $url = "https://www.w3schools.com";

    // Remove all illegal characters from url... SANITIZE
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate e-mail... VALIDATE
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo("$url is a valid URL");
    } else {
        echo("$url is not a valid URL");
    }
    /*
        FILTER_SANITIZE_URL -> 518
        FILTER_VALIDATE_URL -> 273
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