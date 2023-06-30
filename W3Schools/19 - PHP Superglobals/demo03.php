<!DOCTYPE html>
<html>
<body>

<!-- action="archivo o script para enviar datos form... " -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
    // PHP $_REQUEST

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }


    /* 
        PHP $_REQUEST es una variable súper global de PHP 
        que se utiliza para recopilar datos después de enviar un formulario HTML.
    */

    echo "<br>";
    var_dump($_REQUEST);
?>

</body>
</html>