<!DOCTYPE html>
<html>
<body>

<?php
    $x = 5;
    $y = 10;

    function myTest() {
        global $x, $y; // global keyword
        $y = $x + $y;
    }

    myTest();
    echo $y; // outputs 15
?>

</body>
</html>