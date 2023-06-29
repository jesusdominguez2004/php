<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Comparison Operators
    $x = 100;
    $y = "100";

    var_dump($x == $y); echo "<br>"; // true
    var_dump($x === $y); echo "<br>"; // false
    var_dump($x != $y); echo "<br>"; // false
    var_dump($x <> $y); echo "<br>"; // false
    var_dump($x !== $y); echo "<br>"; // true
    var_dump($x > $y); echo "<br>"; // false
    var_dump($x < $y); echo "<br>"; // false
    var_dump($x > $y); echo "<br>"; // false
    var_dump($x >= $y); echo "<br>"; // true
    var_dump($x <= $y); echo "<br>"; // true
    var_dump($x <=> $y); echo "<br>"; // 0 (-1, 0, 1)
?>

</body>
</html>