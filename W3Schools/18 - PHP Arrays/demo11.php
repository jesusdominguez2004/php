<!DOCTYPE html>
<html>
<body>

<?php
    // Sort Array in Descending Order - rsort()
    $numbers = array(4, 6, 2, 22, 11);
    rsort($numbers);

    $arrlength = count($numbers);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";
    }
?>

</body>
</html>