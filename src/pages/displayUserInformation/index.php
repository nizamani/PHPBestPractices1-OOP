<?php
use PHPBestPractices1OOP\Domain\Mlaphp\Response;
use PHPBestPractices1OOP\Controller\DisplayUserInformationPage;

// dependencies
$response = new Response('views');

$controller = new DisplayUserInformationPage(
    $users,
    $resturants,
    $foods,
    $response
);
