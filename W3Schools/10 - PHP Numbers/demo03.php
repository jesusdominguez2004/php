<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Infinity
    echo "A numeric value that is larger than PHP_FLOAT_MAX " . PHP_FLOAT_MAX . " is considered infinite.<br>";
    var_dump(is_finite(3.1415926536));
    var_dump(is_finite(4.95E+309));
    var_dump(is_infinite(3.1415926536));
    var_dump(is_infinite(4.95E+309));

    $x = 1.9e411;
    var_dump($x);
?>

</body>
</html>