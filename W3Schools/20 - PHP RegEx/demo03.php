<!DOCTYPE html>
<html>
<body>

<?php
    // Using preg_replace()
    // Returns 1 if the pattern was found in the string and 0 if not
    // / is the delimiter
    // i is a modifier that makes the search case-insensitive.
    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";
    echo preg_replace($pattern, "W3Schools", $str); // outputs "Visit W3Schools!"
?>

</body>
</html>