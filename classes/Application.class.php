<?php

class Application {

    public $characters;

    function __construct() {
        $this->dataHandler = new DataHandler();
    }

    function init() {
        $this->characters = $this->dataHandler->convertDataToArray();
    }

    function update() {
        for ($i=0; $i < count($this->characters) - 1; $i++) { 
            for ($j=0; $j < count($this->characters[$i]) - 1; $j++) { 
                if ($this->checkSquareInChars($this->getSquare($i, $j))) {
                    echo $this->characters[$i][$j] . " ($j,$i) \n";
                }
            }
        }
    }

    function getSquare($i, $j) {
        $square = [];
        $square[0] = $this->characters[$i][$j];
        $square[1] = $this->characters[$i][$j + 1];
        $square[2] = $this->characters[$i + 1][$j];
        $square[3] = $this->characters[$i + 1][$j + 1];
        return $square;
    }

    function checkSquareInChars($square) {
        $topLeft = $square[0];
        foreach ($square as $value) {
            if ($topLeft != $value) {
                return false;
            }
        }
        return true;
    }

}


?>