<?php 
    /* 
        Modify a Cookie Value
        To modify a cookie, just set (again) the cookie using the setcookie() function:

        syntax...
        setcookie(name, value, expire, path, domain, secure, httponly);

        Only the name parameter is required. 
        All other parameters are optional.
        The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).
        
        Nota: La función setcookie() debe aparecer ANTES de la etiqueta <html>.

    */
    $cookie_name = "user";
    $cookie_value = "Alex Porter";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
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
    // Modify a Cookie Value
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

    /*  
        isset(...) -> Determine if a variable is declared and is different than NULL.
        $_COOKIE -> An associative array of variables passed to the current script via HTTP Cookies.
        Nota: El valor de la cookie se codifica como URL automáticamente cuando se envía la cookie 
        y se decodifica automáticamente cuando se recibe (para evitar la codificación de URL, utilice setrawcookie() en su lugar).
    */
?>

</body>
</html>