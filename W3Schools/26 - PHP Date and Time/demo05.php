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
    // Create a Date From a String With strtotime()
    // Syntax: strtotime(time, now)
    $d = strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:s a", $d) . "<br>";

    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:s a", $d) . "<br>";

    $d = strtotime("next Saturday");
    echo date("Y-m-d h:i:s a", $d) . "<br>";

    $d = strtotime("+3 Months");
    echo date("Y-m-d h:i:s a", $d) . "<br>";
?>

</body>
</html>