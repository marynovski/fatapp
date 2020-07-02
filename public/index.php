<?php

require_once '../vendor/autoload.php';
include_once '../config/routes.php';



$route = $_GET['route'];

$controllerName = 'App\\Controller\\'.$routes[$route]['controller'];
$methodName     = $routes[$route]['function'];
$controller     = new $controllerName();

$htmlContent = $controller->$methodName()['html'];
$p  = $controller->$methodName()['p'];

print_r($p);
var_dump($p['testName']);


$title = "test";
$lang = 'pl';

include_once '../templates/layout.html.php';

#Route to controller->method
#Render templeta inside layout.html.twig
#Put config vars into layout

