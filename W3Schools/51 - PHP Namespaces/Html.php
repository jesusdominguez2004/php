<?php
    // Grupo de clases namespace "Html"
    namespace Html;

    // Html\Table
    class Table {
        public $title = "";
        public $numRows = 0;

        public function message() {
            echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
        }
    }

    // Html\Row
    class Row {
        public $numCells = 0;
        public function message() {
            echo "<p>The row has {$this->numCells} cells.</p>";
        }
    }
?>