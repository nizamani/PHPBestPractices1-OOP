<?php
$di = new PHPBestPractices1OOP\Di\Di($GLOBALS);

// set a container service for the router
$di->set('router', function () use ($di) {
    $router = new PHPBestPractices1OOP\Router\Router(basename(dirname(__DIR__) . "/pages"));
    $router->setRoutes(array());
    return $router;
});