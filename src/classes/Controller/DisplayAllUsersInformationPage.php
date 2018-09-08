<?php
namespace PHPBestPractices1OOP\Controller;

use PHPBestPractices1OOP\Request\Request;
use PHPBestPractices1OOP\Response\Response;
use PHPBestPractices1OOP\Domain\User\UserFactory;

class DisplayAllUsersInformationPage
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
     * DisplayAllUsersInformationPage constructor.
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
        // vars
        $usersDisplayArray = array();
        $userIds = array(1, 2);

        // create user object
        $usersCollection = $this->userFactory->createUsersCollection($userIds);

        foreach ($usersCollection as $userObject) {
            $usersDisplayArray[] = array(
                "name" => $userObject->getName(),
                "age" => $userObject->getAge(),
                "restaurant" => $userObject->getFavoriteRestaurantName(),
                "food" => $userObject->getFavoriteFoodName()
            );
        }

        // this will display the user's information
        $this->response->setView("displayAllUsersInformation/index.php");
        $this->response->setVars(
            array(
                "userDisplayArray" => $usersDisplayArray
            )
        );

        return $this->response;
    }
}
