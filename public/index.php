<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


require_once '../vendor/autoload.php';
include_once '../config/routes.php';

$route = $_GET['route'];

if (empty($route)) {
    $route = 'homepage';
}

$controllerName = 'App\\Controller\\'.$routes[$route]['controller'];
$methodName     = $routes[$route]['function'];
$controller     = new $controllerName();

$htmlContent = $controller->$methodName();


$title = "test";
$lang = 'pl';

include_once '../templates/layout.html.php';
#Route to controller->method
#Render templeta inside layout.html.twig
#Put config vars into layout

