<?php declare(strict_types = 1);?>
<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Functions - Returning values
    function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
    }
    
    echo "5 + 10 = " .  sum(5, 10) . "<br>";
    echo "7 + 13 = " .  sum(7, 13) . "<br>";
    echo "2 + 4 = " .  sum(2, 4);
?>

</body>
</html>