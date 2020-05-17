<?php
spl_autoload_register(function ($name) {
    // PSR-0

    $name = str_replace('\\', DIRECTORY_SEPARATOR, $name);

    $path = __DIR__
        . DIRECTORY_SEPARATOR
        . 'app'
        . DIRECTORY_SEPARATOR
        . $name
        . '.php';

    if ( !is_file($path) ) {
        $className = array_pop(explode( '\\', $name ));
        die("Class $className not found in $path");
        //throw new Exception("Class $className not found in $path");
    }

    require_once $path;

});
