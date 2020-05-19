<?php
require_once 'Hello.php';

$requestUri = $_SERVER['REQUEST_URI'];
$requestUri = str_replace([',', '!', ',', '.', '?', ';', '-', '+', '*',
    '=', '&', '^', '$', '%', '#', '@', '(', ')', '<', '>', '"'], '', $requestUri);
$requestUri = explode('/', $requestUri);

if(class_exists($requestUri[1])){
    $hello = new Hello();
    if(method_exists($hello, $requestUri[2])){
        echo $hello->world();
    }
}