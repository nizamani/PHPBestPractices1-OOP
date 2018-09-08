<?php
$di = new PHPBestPractices1OOP\Di\Di($GLOBALS);

// set a container service for the router
$di->set('router', function () use ($di) {
    $router = new PHPBestPractices1OOP\Router\Router(basename(dirname(__DIR__) . "/includes"));
    $router->setRoutes(array());
    $router->setRoutes(array(
        // add a route that points to a container service name
        "/displaySingleUser/" => "Controller\DisplayUserInformationPage",
        "/displayAllUsers/" => "Controller\DisplayAllUsersInformationPage",
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

// set a container service for user factory
$di->set("userFactory", function () use ($di) {
    return new PHPBestPractices1OOP\Domain\User\UserFactory(
        $di->get("usersTransactions"),
        $di->get("foodFactory"),
        $di->get("restaurantFactory")
    );
});

// set a container service for food factory
$di->set("foodFactory", function () use ($di) {
    return new PHPBestPractices1OOP\Domain\Food\FoodFactory(
        $di->get("foodsTransactions")
    );
});

// set a container service for restaurant factory
$di->set("restaurantFactory", function () use ($di) {
    return new PHPBestPractices1OOP\Domain\Restaurant\RestaurantFactory(
        $di->get("restaurantsTransactions")
    );
});

// display user information service
$di->set('Controller\DisplayUserInformationPage', function () use ($di) {
    return new PHPBestPractices1OOP\Controller\DisplayUserInformationPage(
        $di->get("request"),
        $di->get("response"),
        $di->get("userFactory")
    );
});

// display all user information service
$di->set('Controller\DisplayAllUsersInformationPage', function () use ($di) {
    return new PHPBestPractices1OOP\Controller\DisplayAllUsersInformationPage(
        $di->get("request"),
        $di->get("response"),
        $di->get("userFactory")
    );
});
