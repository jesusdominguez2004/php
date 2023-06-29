<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Array Operators
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");

    print_r($x + $y); // + (union of $x and $y)
    var_dump($x == $y); // == (false)
    var_dump($x === $y); // === (false)
    var_dump($x != $y); // != (true)
    var_dump($x <> $y); // <> (true)
    var_dump($x !== $y); // !== (true)
?>

</body>
</html>