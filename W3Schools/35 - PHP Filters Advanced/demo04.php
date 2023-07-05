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
    // Remove Characters With ASCII Value > 127
    $str = "<h1>Hello WorldÆØÅ!</h1>";
    
    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;

    /*  
        FILTER_SANITIZE_STRING -> 513
        FILTER_FLAG_STRIP_HIGH -> 8
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