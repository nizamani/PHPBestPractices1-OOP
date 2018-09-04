<?php
$basePath = dirname(__DIR__) . DIRECTORY_SEPARATOR;
require_once($basePath."/config/autoloader.php");

use PHPBestPractices1OOP\Controller\NotFoundPage;

$controller = new NotFoundPage();
$controller->__invoke();
