<?php
    namespace persons1;
    class Persons1{
        public $name;
        public $age;
        
        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }


        public function getPersons1(){
            $person2 = $this->name . " is " . $this->age ."Year Old";

            return $person2;
        }
    }
    
?>