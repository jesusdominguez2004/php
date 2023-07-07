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
        PHP - More on Static Methods
        Los métodos estáticos se pueden llamar directamente, sin crear primero una instancia de la clase.
        Usar "::" para acceder a static function...
        ClassName::staticMethod();
        Una clase puede tener métodos estáticos y no estáticos. 
        Se puede acceder a un método estático desde un método en la misma clase 
        usando la palabra clave "self" y dos puntos dobles (::)...
        Los métodos estáticos también se pueden llamar desde métodos de otras clases. 
        Para hacer esto, el método estático debe ser public...
        Para llamar a un método estático desde una clase secundaria, use la palabra clave parent
        dentro de la clase secundaria. Aquí, el método estático puede ser public o protected...
    */

    class domain {
        protected static function getWebsitename() {
            return "W3Schools.com";
        }
    }

    class domainW3 extends domain {
        public $websiteName;
        public function __construct() {
            $this->websiteName = parent::getWebsitename();
        }
    }

    $domainW3 = new domainW3; // NOTA: No usó new ClassName(); Tampoco mayúscula inicial...
    echo $domainW3 -> websiteName; // NOTA: A veces se deja espacio entre "->"
?>

</body>
</html>