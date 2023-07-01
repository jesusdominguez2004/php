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
    // More Date Examples
    // Syntax: strtotime(time, now)
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);
    
    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }

    // The example below outputs the number of days until 4th of July
    $d1 = strtotime("July 04");
    $d2 = ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until 4th of July.";
?>

</body>
</html>