<!DOCTYPE html>
<html>
<body>

<?php
    // How to output text and variables with the print statement
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y . "<br>";

    print ("<h2>" . $txt1 . "</h2>");
    print ("Study PHP at " . $txt2 . "<br>");
    print ($x + $y);
?>

</body>
</html>