<?php
namespace PHPBestPractices1OOP\Controller;

use PHPBestPractices1OOP\Request\Request;
use PHPBestPractices1OOP\Response\Response;
use PHPBestPractices1OOP\Domain\User\UserFactory;

class GreetSingleUserPage
{
    /**
     * @var Response
     */
    private $response;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var UserFactory
     */
    private $userFactory;

    /**
     * GreetSingleUserPage constructor.
     * @param Request $request
     * @param Response $response
     * @param UserFactory $userFactory
     */
    public function __construct(
        Request $request,
        Response $response,
        UserFactory $userFactory
    ) {
        $this->response = $response;
        $this->request = $request;
        $this->userFactory = $userFactory;
    }

    public function __invoke()
    {
        // create user object
        $userObject = $this->userFactory->createUser(2);

        // this will display greeting message to the user
        $this->response->setView("greetSingleUser/index.php");
        $this->response->setVars(
            array(
                "name" => $userObject->getName()
            )
        );

        return $this->response;
    }
}
