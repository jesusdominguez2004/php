<!DOCTYPE html>
<html>
<body>

<?php
    // Loop Through an Indexed Array
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);

    for ($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
?>

</body>
</html>