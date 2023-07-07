<?php 
    /* 
        Namespace Alias
        Namespaces are qualifiers that solve two different problems:
        1. Permiten una mejor organización al agrupar clases que trabajan juntas para realizar una tarea.
        2. Permiten utilizar el mismo nombre para más de una clase
        DEBE DE SER LO PRIMERO DEL SCRIPT...
        Para una mayor organización, es posible tener espacios de nombres anidados.
    */
    include "Html.php";
    use Html\Table as T;
    $table = new T();
    $table->title = "My table";
    $table->numRows = 5;
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

</body>
</html>