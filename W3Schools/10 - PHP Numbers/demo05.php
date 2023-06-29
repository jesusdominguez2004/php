<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Numerical Strings
    $x = 5985;
    var_dump(is_numeric($x)); // TRUE

    $x = "5985";
    var_dump(is_numeric($x)); // TRUE

    /* 
        PHP automáticamente hace la conversión string a numeric
        podemos valernos de ese comportamiento para estos resultados...
    */
    $x = "59.85" + 100; 
    var_dump(is_numeric($x)); // TRUE (159.85)

    $x = "Hello";
    var_dump(is_numeric($x)); // FALSE

    /*
        From PHP 7.0: The is_numeric() function will return FALSE 
        for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), 
        as they are no longer considered as numeric strings...
    */
?>

</body>
</html>