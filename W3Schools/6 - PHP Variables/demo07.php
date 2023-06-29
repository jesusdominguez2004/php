<!DOCTYPE html>
<html>
<body>

<?php
    // The static Keyword
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
    }

    myTest();
    myTest();
    myTest();
?>

</body>
</html>