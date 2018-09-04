<?php
// get base directory
$baseDir =  $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.$projectUrl;
require_once($baseDir."/fakedatabase/db.php");

use PHPBestPractices1OOP\Controller\DisplayUserInformationPage;

$controller = new DisplayUserInformationPage(
    $users,
    $resturants,
    $foods
);
$controller->__invoke();
