<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Math
    echo(pi()) . "<br>"; // returns 3.1415926535898
    
    echo(min(0, 150, 30, 20, -8, -200)) . "<br>"; // returns -200
    echo(max(0, 150, 30, 20, -8, -200)) . "<br>"; // returns 150

    echo(abs(-6.7)) . "<br>"; // returns 6.7

    echo(sqrt(64)) . "<br>"; // returns 8

    echo(round(0.60)) . "<br>"; // return 1 (nearest integer)
    echo(round(0.49)) . "<br>"; // return 0 (nearest integer)

    echo(rand()) . "<br>";
    echo(rand(10, 100)) . "<br>";

    /* 
        Hay más funciones matemáticas...
        Pero por ahora solo usaremos éstas...
    */
?>

</body>
</html>