<?php
use PHPBestPractices1OOP\Domain\UsersTransactions\UsersTransactions;
use PHPBestPractices1OOP\Domain\RestaurantsTransactions\RestaurantsTransactions;
use PHPBestPractices1OOP\Domain\FoodsTransactions\FoodsTransactions;
use PHPBestPractices1OOP\Response\Response;
use PHPBestPractices1OOP\Request\Request;
use PHPBestPractices1OOP\Controller\DisplayUserInformationPage;

// dependencies
$request = new Request($GLOBALS);
$response = new Response('views');
$usersTransactions = new UsersTransactions($users);
$restaurantsTransactions = new RestaurantsTransactions($resturants);
$foodsTransactions = new FoodsTransactions($foods);

$controller = new DisplayUserInformationPage(
    $request,
    $response,
    $usersTransactions,
    $restaurantsTransactions,
    $foodsTransactions
);
