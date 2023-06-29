<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Integers
    echo PHP_INT_MAX . " The largest integer supported (tu sistema)<br>";
    echo PHP_INT_MIN . " The smallest integer supported (tu sistema)<br>";
    echo PHP_INT_SIZE . " The size of an integer in bytes (tu sistema)<br>";

    echo is_int(4) . "<br>";
    echo is_int("abc") . "<br>";
    echo is_integer(4) . "<br>";
    echo is_integer("abc") . "<br>";
    echo is_long(4) . "<br>";
    echo is_long("abc") . "<br>";

    $x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_int($x));
?>

</body>
</html>