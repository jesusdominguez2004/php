<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>

<?php 
    /*
        The Exception Object
        An exception is an object that describes an error or unexpected behaviour of a PHP script.
        
        new Exception(message, code, previous)
        message	-> Optional. A string describing why the exception was thrown...
        code -> Optional. An integer that can be used used to easily distinguish this exception from others of the same type...
        previous -> Optional. If this exception was thrown in a catch block of another exception, it is recommended to pass that exception into this parameter...

        methods
        getMessage() -> Returns a string describing why the exception was thrown...
        getPrevious() -> If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null...
        getCode() -> Returns the exception code...
        getFile() -> Returns the full path of the file in which the exception was thrown...
        getLine() -> Returns the line number of the line of code which threw the exception...
    */

    // aquí un ejemplo sobre la información de la excepción:
    function divide($dividend, $divisor) {
        if ($divisor == 0) {
            throw new Exception("Division by zero", 1);
        }
        return $dividend / $divisor;
    }

    try {
        echo divide(5, 0);
    } catch(Exception $ex) {
        $code = $ex -> getCode();
        $message = $ex -> getMessage();
        $file = $ex -> getFile();
        $line = $ex -> getLine();
        echo "Exception thrown in $file on line $line: [Code $code] $message";
    }
?>

</body>
</html>