<!DOCTYPE html>
<html>
<body>

<?php
    // PHP Conditional Assignment Operators
    // $x = expr1 ? expr2 : expr3 (TERNARY)
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo ("<br>");

    $user = "John Doe";
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo ("<br>");

    // $x = expr1 ?? expr2 (NULL COALESCING)
    echo $user = $_GET["user"] ?? "anonymous";
    echo ("<br>");

    echo $color = $color ?? "red";
    echo ("<br>");

    // Extra...
    var_dump($_GET);
?>

</body>
</html>