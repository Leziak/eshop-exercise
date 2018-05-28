<?php



// BOOTSTRAPPING
// include / require all the necessary files

require_once '../vendor/leziak/mvc/routing.php';


// ROUTING
// http://www.eshop.test - handle by homepage controller
// http://www.eshop.test?page=category - handle by category controller
// http://www.eshop.test?page=product - handle by product controller

$controller_name = \leziak\mvc\routing\getControllerFromUrl();

var_dump($controller_name);

require '../app/Http/controllers/' . $controller_name . '.php';
