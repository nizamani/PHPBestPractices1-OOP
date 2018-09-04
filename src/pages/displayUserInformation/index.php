<?php
// get base directory
$baseDir =  $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.$projectUrl;
require_once($baseDir."/fakedatabase/db.php");

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
