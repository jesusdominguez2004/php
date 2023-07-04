<?php 
    /*
        Modify a PHP Session Variable
        To change a session variable, just overwrite it...
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
    // Modify a PHP Session Variable
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
    
    echo "<br>";
    var_dump($_SESSION);

    /*  
        print_r(...) -> Prints human-readable information about a variable.
        $_SESSION -> An associative array containing session variables available to the current script. See the Session functions documentation for more information on how this is used.
        session_star(...) -> Initialize session data. Start new or resume existing session

        No hay que usar include, ni required ni post ni get
        Las variables de la sessión son globales...
        ¿Cómo funciona? ¿Cómo sabe que soy yo?
        La mayoría de las sesiones configuran una clave de usuario en la computadora del usuario que se parece a esto: 
        765487cf34ert8dede5a562e4f3a7e12. Luego, cuando se abre una sesión en otra página, escanea la computadora en busca de 
        una clave de usuario. Si hay una coincidencia, accede a esa sesión, si no, inicia una nueva sesión.
    */
?>

</body>
</html>