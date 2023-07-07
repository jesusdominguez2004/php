<?php 
    /*
        Using Namespaces
        Cuando se usan muchas clases del mismo espacio de nombres al mismo tiempo, 
        es más fácil usar la palabra clave namespace, en vez de escribir Html\Class();
    */
    namespace Html;
    include "Html.php";

    $table = new Table();
    $table->title = "My table";
    $table->numRows = 5;

    $row = new Row();
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