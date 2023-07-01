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
    // Get a Date
    /*
        d - Represents the day of the month (01 to 31)
        m - Represents a month (01 to 12)
        Y - Represents a year (in four digits)
        l (lowercase 'L') - Represents the day of the week
    */
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";

    // Tip: Automatic Copyright Year
    echo "&copy 2010-" . date("Y");
?>

</body>
</html>