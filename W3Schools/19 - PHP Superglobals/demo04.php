<!DOCTYPE html>
<html>
<body>

<!-- action="archivo o script para enviar datos form... "-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
    // PHP $_POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }

    /* 
        PHP $_POST es una variable súper global de PHP 
        que se utiliza para recopilar datos de formulario 
        después de enviar un formulario HTML con method="post". 
        $_POST también se usa ampliamente para pasar variables.
    */

    echo "<br>";
    var_dump($_POST);
?>

</body>
</html>