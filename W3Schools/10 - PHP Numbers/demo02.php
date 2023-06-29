<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Floats
    echo PHP_FLOAT_MAX . " The largest representable floating point number<br>";
    echo PHP_FLOAT_MIN . " The smallest representable positive floating point number<br>";
    echo PHP_FLOAT_DIG . " The number of decimal digits that can be rounded into a float and back without precision loss<br>";
    echo PHP_FLOAT_EPSILON . " The smallest representable positive number x, so that x + 1.0 != 1.0<br>";

    echo is_float(4.95) . "<br>";
    echo is_float("abc") . "<br>";
    echo is_double(4.95) . "<br>";
    echo is_double("abc") . "<br>";

    $x = 10365;
    var_dump(is_float($x));

    $x = 10.365;
    var_dump(is_float($x));
?>

</body>
</html>