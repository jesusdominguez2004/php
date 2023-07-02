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
    // PHP readfile() Function
    echo readfile("webdictionary.txt");
    echo "<br>";
    echo "the readfile() function returns the number of bytes read on success!";
?>

</body>
</html>