<?php
namespace PHPBestPractices1OOP\Controller;

class NotFoundPage
{
    public function __invoke()
    {
        echo "Page not found";
    }
}
