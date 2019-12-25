<?php 

class Person {
    protected $first = "Sunny";
    public $last = "Shingala";
    private $age = "19";
}

class Pet extends Person{
    function owner() {
        $a = $this->first;
        return $a;
    }
}