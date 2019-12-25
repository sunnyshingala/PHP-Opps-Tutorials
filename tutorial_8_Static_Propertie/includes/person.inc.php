<?php

class Persons{
    //properties
    private $name; 
    private $eyecolor; 
    private $age; 

    public static $drinkingAge = 22;

    public function __construct($name, $eyecolor, $age)
    {
        $this->name = $name;
        $this->eyecolor = $eyecolor;
        $this->age = $age;
    }

    //method
    public function getDA(){
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    }
}

?>