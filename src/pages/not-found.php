<?php
$basePath = dirname(__DIR__) . DIRECTORY_SEPARATOR;

use PHPBestPractices1OOP\Domain\Mlaphp\Response;
use PHPBestPractices1OOP\Domain\Mlaphp\Request;
use PHPBestPractices1OOP\Controller\NotFoundPage;

// dependencies
$request = new Request($GLOBALS);
$response = new Response('views');

$controller = new NotFoundPage(
    $request,
    $response
);
