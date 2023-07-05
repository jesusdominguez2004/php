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
    // Validate URL - Must Contain QueryString
    $url = "https://www.w3schools.com";
    
    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("$url is a valid URL with a query string");
    } else {
        echo("$url is not a valid URL with a query string");
    }

    /*  
        FILTER_VALIDATE_URL -> 273
        FILTER_FLAG_QUERY_REQUIRED -> 524288
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