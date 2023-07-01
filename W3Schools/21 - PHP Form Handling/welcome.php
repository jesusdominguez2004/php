<!DOCTYPE html>
<html>
<body>

<!-- $_POST funciona con HTTP POST method -->
Welcome <?php echo $_POST["name"]; ?> <br>
Your email address is: <?php echo $_POST["email"]; ?>

<h2>$_POST is invisible to others!</h2>
<p>
    Information sent from a form with the POST method is invisible to others 
    (all names/values are embedded within the body of the HTTP request) 
    and has <strong>no limits</strong> on the amount of information to send.
</p>
<p>
    Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.
</p>
<p>
    However, because the variables are not displayed in the URL, it is not possible to bookmark the page.
</p>
<p>
    <strong>NOTE:</strong> Developers prefer POST for sending form data.
</p>

</body>
</html>