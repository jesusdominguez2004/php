<!DOCTYPE html>
<html>
<body>

<?php
    // PHP $_SERVER

    /* 
        $_SERVER es una variable súper global de PHP que contiene 
        información sobre encabezados, rutas y ubicaciones de secuencias de comandos.
    */
    echo "<h2>Elementos básicos:</h2>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    
    echo "<h2>Elementos más importantes:</h2>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['GATEWAY_INTERFACE'];
    echo "<br>";
    echo $_SERVER['SERVER_ADDR'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['SERVER_SOFTWARE'];
    echo "<br>";
    echo $_SERVER['SERVER_PROTOCOL'];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    echo $_SERVER['REQUEST_TIME'];
    echo "<br>";
    echo $_SERVER['QUERY_STRING'];
    echo "<br>";
    echo $_SERVER['HTTP_ACCEPT'];
    echo "<br>";
    echo $_SERVER['HTTP_ACCEPT_CHARSET'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTPS'];
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br>";
    echo $_SERVER['REMOTE_HOST'];
    echo "<br>";
    echo $_SERVER['REMOTE_PORT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_FILENAME'];
    echo "<br>";
    echo $_SERVER['SERVER_ADMIN'];
    echo "<br>";
    echo $_SERVER['SERVER_PORT'];
    echo "<br>";
    echo $_SERVER['SERVER_SIGNATURE'];
    echo "<br>";
    echo $_SERVER['PATH_TRANSLATED'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo $_SERVER['SCRIPT_URI'];
    echo "<br>";

    // Extra...
    echo "<h2>Array supergobal servidor localhost:</h2>";
    var_dump($_SERVER);
    echo "<br>";

    echo "<h2>Values en mi servidor localhost:</h2>";
    foreach ($_SERVER as $value) {
        echo "$value";
        echo "<br>";
    }

    echo "<h2>Keys en mi servidor localhost:</h2>";
    foreach ($_SERVER as $key => $value) {
        echo "$key";
        echo "<br>";
    }

    echo "<h2>Keys values de mi servidor localhost:</h2>";
    foreach ($_SERVER as $key => $value) {
        echo "Key=" . $key . ", Value=" . $value;
        echo "<br>";
    }
?>

</body>
</html>