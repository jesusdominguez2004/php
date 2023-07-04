<?php 
    /*
        Start a PHP Session
        Una sesión es una forma de almacenar información (en variables) para usarla en varias páginas.
        A diferencia de una cookie, la información no se almacena en la computadora de los usuarios.
        De forma predeterminada, las variables de sesión duran hasta que el usuario cierra el navegador.
        Las variables de sesión contienen información sobre un solo usuario y están disponibles para todas las páginas en una aplicación.

        Nota: La función session_start() debe ser lo primero en su documento. Antes de cualquier etiqueta HTML.
    */

    // Start the session...
    session_start();
?>  

<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>

<?php     
    // Set session variables...
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Seccion variable are set.";
        
    echo "<br>";
    var_dump($_SESSION);
    /*  
        $_SESSION -> An associative array containing session variables available to the current script. See the Session functions documentation for more information on how this is used.
    */
?>

</body>
</html>