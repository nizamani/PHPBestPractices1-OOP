<?php
$basePath = dirname(__DIR__) . DIRECTORY_SEPARATOR;

use PHPBestPractices1OOP\Response\Response;
use PHPBestPractices1OOP\Request\Request;
use PHPBestPractices1OOP\Controller\NotFoundPage;

// dependencies
$request = new Request($GLOBALS);
$response = new Response('views');

$controller = new NotFoundPage(
    $request,
    $response
);
