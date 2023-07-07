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
        PHP - What are Interfaces?
        Las interfaces le permiten especificar qué métodos debe implementar una clase.
        Las interfaces facilitan el uso de una variedad de clases diferentes de la misma manera. 
        Cuando una o más clases utilizan la misma interfaz, se denominas "polimorfismo".

        No pueden tener atributos...
        Todos los métodos son públicos...
        Todos los métodos son abstractos, no hay instrucciones...
        La palabra clave "abstract" no es necesaria...
        Las clases pueden implementar interfaces y otras clases al mismo tiempo...
        Pero debe implementar todos los métodos...
    */

    interface Animal {
        public function makeSound();
    }

    class Cat implements Animal {
        public function makeSound() {
            echo " Meow ";
        }
    }

    class Dog implements Animal {
        public function makeSound() {
            echo " Bark ";
        }
    }

    class Mouse implements Animal {
        public function makeSound() {
            echo " Squeak ";
        }
    }

    /*
        Cada clase implementa los métodos de la interfaces...
        Todos "hacenSonido" pero cada uno a su modo...
        Es un tipo de polimorfismo...
    */
    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();
    $animals = array($cat, $dog, $mouse);

    foreach ($animals as $animal) {
        $animal -> makeSound();
    }
?>

</body>
</html>