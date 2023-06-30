<!DOCTYPE html>
<html>
<body>

<?php
    // PHP $_GET
    echo "<h2>¡Soy demo05.php!</h2>";
    echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
    /* 
        PHP $_GET es una variable súper global de PHP 
        que se utiliza para recopilar datos de formulario 
        después de enviar un formulario HTML con method="get".
        $_GET también puede recopilar datos enviados en la URL.
    */
    echo "<br>";
    var_dump($_GET);
    echo "<br>";
    echo "<a href='test_get.html'>Volver a test_get.html</a>";
?>

</body>
</html>