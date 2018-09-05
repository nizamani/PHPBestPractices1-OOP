<?php
use PHPBestPractices1OOP\Response\Response;
use PHPBestPractices1OOP\Controller\DisplayUserInformationPage;

// dependencies
$response = new Response('views');

$controller = new DisplayUserInformationPage(
    $users,
    $resturants,
    $foods,
    $response
);
