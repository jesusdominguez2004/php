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
        PHP - Creating Iterables
        An iterable is any value which can be looped through with a foreach() loop.
        The iterable pseudo-type was introduced in PHP 7.1, 
        and it can be used as a data type for function arguments and function return values.
    */

    // Create an Iterator
    class MyIterator implements Iterator {
        private $items = [];
        private $pointer = 0;

        public function __construct($items) {
            // array_values() makes sure that the keys are numbers
            $this->items = array_values($items);
        }

        public function current() {
            return $this->items[$this->pointer];
        }

        public function key() {
            return $this->pointer;
        }

        public function next() {
            $this->pointer++;
        }

        public function rewind() {
            $this->pointer = 0;
        }

        public function valid() {
            // count() indicates how many items are in the list
            return $this->pointer < count($this->items);
        }
    }

    // A function that uses iterables
    function printIterable(iterable $myIterable) {
        foreach ($myIterable as $item) {
            echo $item;
        }
    }

    // Use the iterator as an iterable
    $iterator = new MyIterator(["a", "b", "c"]);
    printIterable($iterator);

?>

</body>
</html>