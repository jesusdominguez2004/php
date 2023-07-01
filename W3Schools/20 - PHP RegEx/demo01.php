<!DOCTYPE html>
<html>
<body>

<?php
    // Using preg_match()
    // Returns 1 if the pattern was found in the string and 0 if not
    // / is the delimiter
    // i is a modifier that makes the search case-insensitive.
    $str = "Visit W3Schools";
    $pattern = "/w3schools/i";
    echo preg_match($pattern, $str); // outputs 1
?>

</body>
</html>