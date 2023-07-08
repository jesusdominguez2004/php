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
    /* 
        PHP - What is an Iterable?
        An iterable is any value which can be looped through with a foreach() loop.
        The iterable pseudo-type was introduced in PHP 7.1, 
        and it can be used as a data type for function arguments and function return values.
    */

    // PHP - Using Iterables
    function printIterable(iterable $myIterable) {
        foreach($myIterable as $item) {
            echo $item;
        }
    }

    $arr = ["a", "b", "c"];
    printIterable($arr);
    
    echo "<br>";
    var_dump($arr);
?>

</body>
</html>