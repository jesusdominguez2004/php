<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Logical Operators
    $x = 100;
    $y = 50;
    if ($x == 100 and $y == 50) { // and
        echo "Hello world!<br>";
    }

    if ($x == 100 or $y == 80) { // or
        echo "Hello world!<br>";
    }

    if ($x == 100 xor $y == 80) { // xor (solo uno true)
        echo "Hello world!<br>";
    }

    if ($x == 100 && $y == 80) { // && (and)
        echo "Hello world!<br>";
    }

    if ($x == 100 || $y == 80) { // || (or)
        echo "Hello world!<br>";
    }

    if ($x !== 90) { // ! (not)
        echo "Hello world!";
    }
?>

</body>
</html>