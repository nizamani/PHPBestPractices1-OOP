<?php
$di = new PHPBestPractices1OOP\Di\Di($GLOBALS);

// set a container service for the router
$di->set('router', function () use ($di) {
    $router = new PHPBestPractices1OOP\Router\Router(basename(dirname(__DIR__) . "/pages"));
    $router->setRoutes(array());
    $router->setRoutes(
        array(
            // add a route that points to a container service name
            "/displayUserInformation" =>
                "Controller\DisplayUserInformationPage",
    ));

    return $router;
});

// set a container service for request
$di->set("request", function () use ($di) {
    return new PHPBestPractices1OOP\Request\Request($GLOBALS);
});

// set a container service for response
$di->set("response", function () use ($di) {
    return new PHPBestPractices1OOP\Response\Response("views");
});

// set a container service for users transactions
$di->set("usersTransactions", function () use ($di) {
    return new PHPBestPractices1OOP\Domain\UsersTransactions\UsersTransactions($GLOBALS["users"]);
});

// set a container service for restaurants transactions
$di->set("restaurantsTransactions", function () use ($di) {
    return new PHPBestPractices1OOP\Domain\RestaurantsTransactions\RestaurantsTransactions($GLOBALS["resturants"]);
});

// set a container service for foods transactions
$di->set("foodsTransactions", function () use ($di) {
    return new PHPBestPractices1OOP\Domain\FoodsTransactions\FoodsTransactions($GLOBALS["foods"]);
});

// display user information service
$di->set('Controller\DisplayUserInformationPage', function () use ($di) {
    return new PHPBestPractices1OOP\Controller\DisplayUserInformationPage(
        $di->get("request"),
        $di->get("response"),
        $di->get("usersTransactions"),
        $di->get("restaurantsTransactions"),
        $di->get("foodsTransactions")
    );
});
