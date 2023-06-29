<!DOCTYPE html>
<html>
<body>

<?php
    // Break and Continue in While Loop
    $x = 0;
    while ($x < 10) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        $x++;
    }

    $x = 0;
    while ($x < 10) {
        if ($x == 4) {
            $x++;
            continue;
        }
        echo "The number is: $x <br>";
        $x++;
    }
?>

</body>
</html>