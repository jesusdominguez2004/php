<?php 
    /*
        Using Namespaces
        En Html.php se encuentra el grupo de nombres Html.
        Ahí están definidas las clases Table and Row.
        Solo hay que acceder así: nombreNameSpace\Clase();
    */
    include "Html.php";

    $table = new Html\Table();
    $table->title = "My table";
    $table->numRows = 5;

    $row = new Html\Row();
    $row->numCells = 3;
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        * {font-family: 'Poppins', sans-serif;}
    </style>
</head>
<body>
    <?php $table->message(); ?>
    <?php $row->message(); ?>
</body>
</html>