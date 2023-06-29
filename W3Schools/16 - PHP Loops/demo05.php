<!DOCTYPE html>
<html>
<body>

<?php
    // The PHP foreach Loop
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    
    foreach ($age as $x => $val) {
        echo "$x = $val<br>";
    }
?>

</body>
</html>