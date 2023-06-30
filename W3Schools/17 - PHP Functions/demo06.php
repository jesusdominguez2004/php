<?php declare(strict_types = 1);?>
<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Default Argument Value
    function setHeight(int $minheight = 50) {
        echo "The height is: $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);
?>

</body>
</html>