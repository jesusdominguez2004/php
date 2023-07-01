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

        If the time you got back from the code is not correct, 
        it's probably because your server is in another country or set up for a different timezone.

        So, if you need the time to be correct according to a specific location, you can set the timezone you want to use.
    */
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:s a") . "<br>";
    echo "America/New_York time!";

    // Extra...
    // $timezone = date_default_timezone_get();
    // var_dump($timezone);
?>

</body>
</html>