<?php
use PHPBestPractices1OOP\Response\Response;
use PHPBestPractices1OOP\Request\Request;
use PHPBestPractices1OOP\Controller\DisplayUserInformationPage;

// dependencies
$request = new Request($GLOBALS);
$response = new Response('views');

$controller = new DisplayUserInformationPage(
    $users,
    $resturants,
    $foods,
    $request,
    $response
);
