<!DOCTYPE html>
<html>
<body>

<?php
    // PHP String Functions
    echo strlen("Hello world!") . "<br>"; // outputs 12
    echo str_word_count("Hello world!") . "<br>"; // outputs 2
    echo strrev("Hello world!") . "<br>"; // outputs !dlrow olleH
    echo strpos("Hello world!", "world") . "<br>"; // outputs 6 (returns the character position of the first match. If no match is found, it will return FALSE.)
    echo str_replace("world", "Dolly", "Hello world!") . "<br><br>"; // outputs Hello Dolly!
    
    /* 
        W3Schools tiene un apartado con TODAS las demás funciones...
        Pero por ahora usaremos éstas básicas...
    */
    $txt = "Hello world!";
    echo strlen($txt) . "<br>"; // outputs 12
    echo str_word_count($txt) . "<br>"; // outputs 2
    echo strrev($txt) . "<br>"; // outputs !dlrow olleH
    echo strpos($txt, "world") . "<br>"; // outputs 6 (returns the character position of the first match. If no match is found, it will return FALSE.)
    $newtxt = str_replace("world", "Dolly", $txt); // outputs Hello Dolly!
    echo $newtxt;
?>

</body>
</html>