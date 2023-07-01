<!DOCTYPE html>
<html>
<body>

<!-- $_GET funciona con URL parameters -->
<!-- script.php?var1=value&value2=value&varn=value -->
Welcome <?php echo $_GET["name"]; ?> <br>
Your email address is: <?php echo $_GET["email"]; ?>

<h2>$_GET is visible to everyone!</h2>
<p>
    Information sent from a form with the GET method is visible to everyone 
    (all variable names and values are displayed in the URL). 
    GET also has limits on the amount of information to send. 
    The limitation is about 2000 characters. 
    However, because the variables are displayed in the URL, 
    it is possible to bookmark the page. 
    This can be useful in some cases.
</p>
<p>
    GET may be used for sending non-sensitive data.
</p>
<p>
    <strong>NOTE:</strong> GET should NEVER be used for sending passwords or other sensitive information!
</p>

</body>
</html>