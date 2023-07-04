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
    // Sanitize and Validate an Email Address
    $email = "john.doe@example.com";

    // Remove all illegal characters from email... SANITIZE
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail... VALIDATE
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid email address");
    } else {
        echo("$email is not a valid email address");
    }
    /*
        FILTER_SANITIZE_EMAIL -> 517
        FILTER_VALIDATE_EMAIL -> 274
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