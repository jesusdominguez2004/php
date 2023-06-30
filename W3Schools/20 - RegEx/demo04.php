<!DOCTYPE html>
<html>
<body>

<?php
    // Using preg_replace()
    // Returns 1 if the pattern was found in the string and 0 if not
    // / is the delimiter
    // i is a modifier that makes the search case-insensitive.
    $str = "Apples and bananas.";
    $pattern = "/ba(na){2}/i";
    echo preg_match($pattern, $str); // Outputs 1
?>

</body>
</html>