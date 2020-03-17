<?php

class DataHandler {

    function getFileData() {
       return file_get_contents('assets/input.txt');
    }
    
    function init() {

    }

    function trimCharacters() {
        $chars = $this->getFileData();
        $trimmed = preg_replace( "/\r|\n/", "", $chars);
        return $trimmed;
    }

    //zet de data in een tweedimensionale array
    function convertDataToArray() {
        $array = [];
        $data = $this->trimCharacters();
        $rowLength = strlen($data) / 10;
        for ($i = 0; $i < strlen($data); $i = $i + $rowLength) {
            $subArray = [];
            for ($j=$i; $j < $i + $rowLength; $j++) { 
                array_push($subArray, $data[$j]);
            }
            array_push($array, $subArray);
        }
        return $array;
    }
}

?>