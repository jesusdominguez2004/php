<!DOCTYPE html>
<html>
<body>

<?php
    // The PHP do...while Loop
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);

    /*
        The do...while loop will always execute the block of code once, 
        it will then check the condition, and repeat the loop while the specified condition is true.
    */
    $x = 6;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5)
?>

</body>
</html>