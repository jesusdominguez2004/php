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
    // Get a Time
    /*
        H - 24-hour format of an hour (00 to 23)
        h - 12-hour format of an hour with leading zeros (01 to 12)
        i - Minutes with leading zeros (00 to 59)
        s - Seconds with leading zeros (00 to 59)
        a - Lowercase Ante meridiem and Post meridiem (am or pm)
    */
    echo "The time is " . date("h:i:s a") . "<br>";
    echo "Note that the PHP date() function will return the current date/time of the server!";
?>

</body>
</html>