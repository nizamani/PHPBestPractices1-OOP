<?php
namespace PHPBestPractices1OOP\Controller;

use PHPBestPractices1OOP\Domain\FoodsTransactions\FoodsTransactions;
use PHPBestPractices1OOP\Domain\RestaurantsTransactions\RestaurantsTransactions;
use PHPBestPractices1OOP\Domain\UsersTransactions\UsersTransactions;
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
     * @var UsersTransactions
     */
    private $usersTransactions;

    /**
     * @var RestaurantsTransactions
     */
    private $restaurantsTransactions;

    /**
     * @var FoodsTransactions
     */
    private $foodsTransactions;

    /**
     * DisplayUserInformationPage constructor.
     * @param Request $request
     * @param Response $response
     * @param UsersTransactions $usersTransactions
     * @param RestaurantsTransactions $restaurantsTransactions
     * @param FoodsTransactions $foodsTransactions
     */
    public function __construct(
        $request, $response, $usersTransactions, $restaurantsTransactions, $foodsTransactions
    ) {
        $this->response = $response;
        $this->request = $request;
        $this->usersTransactions = $usersTransactions;
        $this->restaurantsTransactions = $restaurantsTransactions;
        $this->foodsTransactions = $foodsTransactions;
    }

    public function __invoke()
    {
        // create user object
        $userObject = UserFactory::createUser(
            2,
            $this->usersTransactions,
            $this->restaurantsTransactions,
            $this->foodsTransactions
        );

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
