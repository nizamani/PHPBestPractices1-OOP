<?php
require_once("config/autoloader.php");

use PHPBestPractices1OOP\Domain\Router\Router;

// todo set project url at the top
$projectUrl = "PHPBestPractices1OOP";

// set up the router
$pagesDir = basename(dirname(__DIR__) . "/pages");
$router = new Router($pagesDir);

// set routes
$router->setRoutes(array(
    DIRECTORY_SEPARATOR . $projectUrl."/displayUserInformation" => "pages/displayUserInformation/index.php",
));

// match against the url path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = $router->match($path);

// require the page script
require $route;
