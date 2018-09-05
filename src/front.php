<?php
require_once("fakedatabase/db.php");
require_once("includes/setup.php");
require_once("includes/services.php");

use PHPBestPractices1OOP\Router\Router;

// todo set project url at the top
$projectUrl = "studenthome";

// get the shared router service
$router = $di->get('router');

// set routes
$router->setRoutes(array(
    DIRECTORY_SEPARATOR . $projectUrl."/displayUserInformation" => "pages/displayUserInformation/index.php",
));

// match against the url path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = $router->match($path);

// container service, or page script?
if ($di->has($route)) {
    // create a new $controller instance
    $controller = $di->newInstance($route);
} else {
    // require the page script
    require $route;
}

// invoke controller and send response
$response = $controller->__invoke();
$response->send();
