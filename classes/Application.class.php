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
        echo 'CODE WERKT MAAR IK WIL DIT CLEANER MAKEN AUB NIET NAKEN ;)';
        // for ($i=0; $i < count($this->characters) - 1; $i++) { 
        //     for ($j=0; $j < count($this->characters[$i]) - 1; $j++) { 
        //         $left_up = $this->characters[$i][$j];
        //         $right_up = $this->characters[$i][$j + 1];
        //         $left_down = $this->characters[$i + 1][$j];
        //         $right_down = $this->characters[$i + 1][$j + 1];
        //         // echo $left_up . $right_up . "\n";
        //         // echo $left_down . $right_down . "\n";
        //         if (($left_up == $right_down) && 
        //         ($left_up == $right_up) && 
        //         ($left_up == $left_down)) {
        //             echo $this->characters[$i][$j] . " ($j,$i) \n";
        //         } 
        //     }
        // }
    }

    function checkSquare() {

    }

    function loopThroughIndexes() {

    }

    function draw() {
 
    }
}


?>