<?php 
    /*
        Get PHP Session Variable Values
        Notice that session variables are not passed individually to each new page, 
        instead they are retrieved from the session we open at the beginning of each page (session_start()).
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
    // Echo session variables that were set on previous page...
    // No hay que usar include, ni required ni post ni get
    // Las variables de la sessión son globales...
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        
    echo "<br>";
    var_dump($_SESSION);

    /*  
        $_SESSION -> An associative array containing session variables available to the current script. See the Session functions documentation for more information on how this is used.
        session_star(...) -> Initialize session data. Start new or resume existing session
    */
?>

</body>
</html>