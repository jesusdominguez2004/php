<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Casting Strings and Floats to Integers
    $x = 23465.768;
    $int_cast = (int) $x;
    echo $int_cast . "<br>";

    echo (int) $x . "<br>";
    var_dump((int) $x);

    echo "<br>" . (integer) $x . "<br>";
    var_dump((integer) $x);

    echo "<br>" . intval($x) . "<br>";
    var_dump(intval($x));

    $x = "23465.768";
    $int_cast = (int) $x;
    echo "<br>" . $int_cast;
?>

</body>
</html>