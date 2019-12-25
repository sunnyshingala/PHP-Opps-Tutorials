<?php

    class NewClass{
        //property and methods goes here

        public $data = "I am a property";

        public function __construct(){
            echo "This class has been initialised <br>";
        }

        public function setNewProperty($newData){
            $this->data = $newData;
        }

        public function getProperty(){
            return $this->data;
        }

        public function __destruct()
        {
            echo "<br>This is end of class!!";
        }
    }
?>