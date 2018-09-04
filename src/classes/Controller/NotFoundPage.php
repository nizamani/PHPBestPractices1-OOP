<?php
namespace PHPBestPractices1OOP\Controller;

use PHPBestPractices1OOP\Domain\Mlaphp\Response;
use PHPBestPractices1OOP\Domain\Mlaphp\Request;

class NotFoundPage
{
    /**
     * @var Request
     */
    private $request;

    /**
     * @var Response
     */
    private $response;

    /**
     * NotFoundPage constructor.
     * @param Request $request
     * @param Response $response
     */
    public function __construct($request, $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function __invoke()
    {
        $urlPath = parse_url(
            $this->request->server['REQUEST_URI'],
            PHP_URL_PATH
        );

        $this->response->setView('not-found/index.php');
        $this->response->setVars(array(
            'urlPath' => $urlPath,
        ));

        return $this->response;
    }
}
