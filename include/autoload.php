<?php
spl_autoload_register('myAutoLoad');

function myAutoLoad($myClass){
    $path = "classes/";
    $extention = ".class.php";
    $fullPath = $path.$myClass.$extention;

    include $fullPath;
}

