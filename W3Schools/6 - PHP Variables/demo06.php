<!DOCTYPE html>
<html>
<body>

<?php
    // $GLOBALS[index]
    $x = 5;
    $y = 10;

    function myTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest();
    echo $y; // outputs 15
?>

</body>
</html>