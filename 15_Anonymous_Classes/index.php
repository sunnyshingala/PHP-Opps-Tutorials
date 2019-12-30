<?php

include_once './classes/simpleclasses.class.php';

$obj = new SimpleClasses();
$obj->helloWorld();

// Anonymous Classes

$newObj = new class() {
    public function helloWorld(){
        echo "Hello World!";
    }
};

$newObj->helloWorld();
?>