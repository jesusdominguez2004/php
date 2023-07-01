<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
        .error {color: #FF0000}
    </style>
</head>
<body>

<?php 
    // buena práctica: define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    // buena práctica: $_SERVER["REQUEST_METHOD"] == "POST"
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // usar expresiones regulares para validar nombre...
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // usar filter_var para validar email...
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // usar expresiones regulares para validar website...
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    // buena práctica: protección contra hackers
    function test_input($data) {
        $data = trim($data); // eliminar caracteres innecesarios (espacio adicional, tabulación, nueva línea)
        $data = stripslashes($data); // eliminar barras invertidas (\)
        $data = htmlspecialchars($data); // convertir a entidades HTML
        return $data;
    }
?>

<!-- Formulario HTML -->
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: 
    <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: 
    <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: 
    <input type="text" name="website">
    <span class="error">* <?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>    
    Gender: 
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
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