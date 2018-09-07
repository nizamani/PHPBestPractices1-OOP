<?php
namespace PHPBestPractices1OOP\Controller;

use PHPBestPractices1OOP\Request\Request;
use PHPBestPractices1OOP\Response\Response;
use PHPBestPractices1OOP\Domain\User\UserFactory;

class DisplayUserInformationPage
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
     * DisplayUserInformationPage constructor.
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

        // this will display the user's information
        $this->response->setView('displayUserInformation/index.php');
        $this->response->setVars(
            array(
                "name" => $userObject->getName(),
                "age" => $userObject->getAge(),
                "restaurant" => $userObject->getFavoriteRestaurantName(),
                "food" => $userObject->getFavoriteFoodName()
            )
        );

        return $this->response;
    }
}
