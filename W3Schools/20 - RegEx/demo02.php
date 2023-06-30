<!DOCTYPE html>
<html>
<body>

<?php
    // Using preg_match_all()
    // Returns 1 if the pattern was found in the string and 0 if not
    // / is the delimiter
    // i is a modifier that makes the search case-insensitive.
    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";
    echo preg_match_all($pattern, $str); // outputs 4
?>

</body>
</html>