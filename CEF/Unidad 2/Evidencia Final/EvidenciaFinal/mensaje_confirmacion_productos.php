<?php
//  Llamar la función sesión
session_start();
// "!" = Si no, negación
if (!isset($_SESSION['idUser'])){
// Dirijir a
header ("Location:login.php");
}else{ // Si está creada la sesión, llamar variables compartidas
$id_usuario = $_SESSION['idUser'];
$login_usuario = $_SESSION['loginUser'];
$id_perfil = $_SESSION['perfilUser'];
$nombre_usuario = $_SESSION['nombreUser'];
$apellido_usuario = $_SESSION['apellidoUser'];
}
if ($id_perfil == "Cliente"){
header ("Location:menú.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mensaje de confirmación | Almacen</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Mi hoja CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
        include 'conexion_almacen.php';
        include 'clase_ingreso.php';
        # Traer del formulario a esta hoja
        $codigo_prod = $_REQUEST['codigo_prod']; 
?>
<!-- Max 12 de tamaño por fila-->
<div class="container">
  <div class="row"> <!-- row = fila -->
    <div class="col-sm-3"></div>
    <div class="col-sm-6"> <br><br>

    <!-- Formulario centrado -->
    <!-- <center><h3> Buscar productos Almacen <img src="img/buscar.png" width="50"><img src="img/caja.jpg" width="50"></h3></center>-->
        
        <form method="POST" action="eliminar_productos.php">

        <!-- Mensaje confirmar  -->
        <div class="row"> 
          <?php
             echo "<div class='container'><a>¿Desea eliminar este producto?</strong></a><input readonly name='codigo_prod' value='$codigo_prod'></div>";
          ?>
        </div><br>

        <!-- Botón submit que llevará al action (php) -->
        <button type="submit" class="btn btn-danger">Sí, deseo eliminarlo</button>
        <!-- Hipervínculo con clase botón que llevará a inicio 'menú.php' -->
        <a href="menú.php" class="btn btn-dark">No, no deseo eliminarlo</a>
        </form>

    </div>    
    <div class="col-sm-3"></div>
  </div>
</div>
<!---->
</body>
</html>