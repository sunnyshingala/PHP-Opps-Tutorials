<?php
    class House{
        public $StreetName;
        public $StreetNr;
        
        public function __construct($StreetName, $StreetNr)
        {
            $this->StreetName = $StreetName;
            $this->StreetNr = $StreetNr;
        }

        public function getAddress(){
            $house = $this->StreetName . " Near " . $this->StreetNr;
            return $house;
        }
    }
    
?>