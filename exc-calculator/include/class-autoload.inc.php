<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader ($className){ 
    $url = $_SERVER['HTTPS_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'include') !== false) {
        $path = '../classes/';
    } else {
        $path = './classes/';
    }
    
    $extension = '.class.php';

    require_once $path . $className .$extension;
}
