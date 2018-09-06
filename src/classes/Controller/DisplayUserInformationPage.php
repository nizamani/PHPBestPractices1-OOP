<?php
namespace PHPBestPractices1OOP\Controller;

use PHPBestPractices1OOP\Domain\FoodsTransactions\FoodsTransactions;
use PHPBestPractices1OOP\Domain\RestaurantsTransactions\RestaurantsTransactions;
use PHPBestPractices1OOP\Domain\UsersTransactions\UsersTransactions;
use PHPBestPractices1OOP\Request\Request;
use PHPBestPractices1OOP\Response\Response;
use PHPBestPractices1OOP\Domain\User\UserFactory;
use PHPBestPractices1OOP\Domain\Restaurant\RestaurantFactory;
use PHPBestPractices1OOP\Domain\Food\FoodFactory;

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
    public function __construct($request, $response, $usersTransactions, $restaurantsTransactions, $foodsTransactions)
    {
        $this->response = $response;
        $this->request = $request;
        $this->usersTransactions = $usersTransactions;
        $this->restaurantsTransactions = $restaurantsTransactions;
        $this->foodsTransactions = $foodsTransactions;
    }

    public function __invoke()
    {
        // create user's object and set user's name and age to user object
        $userObject = UserFactory::createUser();
        $userRow = $this->usersTransactions->getUserById(1);
        $userObject->setName($userRow["userRow"]["name"]);
        $userObject->setAge($userRow["userRow"]["age"]);

        // get resturant object and set restaurant name to user's favorite restaurant
        $restaurantObject = RestaurantFactory::createResturant();
        $userfavoriteRestaurantIdRow =
            $this->restaurantsTransactions->getRestaurantById($userRow["userRow"]["favoriteFoodId"]);
        $restaurantObject->setName($userfavoriteRestaurantIdRow["restaurantRow"]["name"]);

        // get food object and set food name to user's favorite food
        $foodObject = FoodFactory::createFood();
        $userfavoriteFoodIdRow = $this->foodsTransactions->getFoodById($userRow["userRow"]["favoriteRestaurantId"]);
        $foodObject->setName($userfavoriteFoodIdRow["foodRow"]["name"]);

        // set values to user using food and resturant objects
        $userObject->setfavoriteRestaurantName($restaurantObject->getName());
        $userObject->setfavoriteFoodName($foodObject->getName());

        // response with vars
        $this->response->setView('displayUserInformation/index.php');
        $this->response->setVars(
            array(
                "name" => $userObject->getName(),
                "age" => $userObject->getAge(),
                "restaurant" => $userObject->getFavoriteResturantName(),
                "food" => $userObject->getfavoriteFoodName()
            )
        );

        return $this->response;
    }
}
