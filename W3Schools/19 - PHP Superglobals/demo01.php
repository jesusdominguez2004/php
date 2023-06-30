<!DOCTYPE html>
<html>
<body>

<?php
    // PHP $GLOBALS
    $x = 75;
    $y = 25;

    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $z;
    echo "<br>";
    var_dump($GLOBALS);

    /*
        $GLOBALS es una variable súper global de PHP que se utiliza para acceder a las variables globales desde cualquier parte del script PHP (también desde funciones o métodos).
        PHP almacena todas las variables globales en una matriz llamada $GLOBALS[ index ]. El índice contiene el nombre de la variable.
        El siguiente ejemplo muestra cómo usar la variable súper global $GLOBALS:
    */
?>

</body>
</html>