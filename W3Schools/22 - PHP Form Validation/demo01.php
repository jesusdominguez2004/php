<!DOCTYPE html>
<html>
<body>

<?php 
    // buena práctica: define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    // buena práctica: $_SERVER["REQUEST_METHOD"] == "POST"
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    // buena práctica: ...
    function test_input($data) {
        $data = trim($data); // eliminar caracteres innecesarios (espacio adicional, tabulación, nueva línea)
        $data = stripslashes($data); // eliminar barras invertidas (\)
        $data = htmlspecialchars($data); // convertir a entidades HTML
        return $data;
    }
?>

<!-- Formulario HTML -->
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>     
    Gender: 
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php 
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
?>

<!-- IMPORTANTE: Un poco de teoría de seguridad  -->
<h2>IMPORTANTE: htmlspecialchars() function</h2>
<p>
    The htmlspecialchars() function converts special characters to HTML entities. 
    This means that it will replace HTML characters like < and > with <code>&lt</code>; and <code>&gt</code>;. 
    This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
</p>
<p>
    Al momento de "transferir" los datos de los formularios con submit
    a otro script o al mismo script actual, podemos "proteger" estos datos
    con la función función htmlspecialchars()... Esto evitará un ataque de terceros (Hackers).
</p>

<h2>$_SERVER["PHP_SELF"] variable</h2>
<p>
    $_SERVER["PHP_SELF"] es una variable súper global que devuelve el nombre de archivo del script que se está ejecutando actualmente.
</p>
<p>
    Entonces, $_SERVER["PHP_SELF"] envía los datos del formulario enviado a la página misma, en lugar de saltar a una página diferente. 
    De esta forma, el usuario recibirá mensajes de error en la misma página que el formulario.
</p>
<p>
    The $_SERVER["PHP_SELF"] variable can be used by hackers!
    Por eso es que usamos <strong>htmlspecialchars() function</strong>
</p>

</body>
</html>