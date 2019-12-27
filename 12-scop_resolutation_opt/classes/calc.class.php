<?php
    //scope resolution operator

    // here is the first class example

    class firstClass{
        // properties

        const EXAMPLE = "You can't change this!";
        
        // methodss

        public static function test(){
            $testing = "This is test!";
            return $testing;
        }
    }

    $a = firstClass::test();
    echo $a;
    // here is the second class example

    class secondClass extends firstClass{
        //properties

        public static $static_property = "A static property";

        //methods

        public static function anotherTest(){
            echo parent::EXAMPLE;
            echo self::$static_property;
        }
    }

    $b = secondClass::$static_property;
    echo $b; 
?>