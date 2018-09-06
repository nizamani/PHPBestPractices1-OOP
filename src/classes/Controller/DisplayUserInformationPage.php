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
        // dependencies
        $userObject = UserFactory::createUser();
        $restaurantObject = RestaurantFactory::createResturant();
        $foodObject = FoodFactory::createFood();

        // get user on row 1 from db.php
        $userRow = $this->usersTransactions->getUserById(1);

        // get user's resturant and favorite food ids
        $userfavoriteRestaurantIdRow =
            $this->restaurantsTransactions->getRestaurantById($userRow["userRow"]["favoriteFoodId"]);
        $userfavoriteFoodIdRow = $this->foodsTransactions->getFoodById($userRow["userRow"]["favoriteRestaurantId"]);

        $userObject->setName($userRow["userRow"]["name"]);
        $userObject->setAge($userRow["userRow"]["age"]);

        // success in getting favorite restaurant, set favorite restaurant namme to favorite resturant object
        if ($userfavoriteRestaurantIdRow["success"] === true) {
            $restaurantObject->setName($userfavoriteRestaurantIdRow["restaurantRow"]["name"]);
        }

        // success in getting favorite food, set favorite food values to food object
        if ($userfavoriteFoodIdRow["success"] === true) {
            $foodObject->setName($userfavoriteFoodIdRow["foodRow"]["name"]);
        }

        // set values to user using food and resturant objects
        $userObject->setfavoriteRestaurantId($restaurantObject->getName());
        $userObject->setfavoriteFoodId($foodObject->getName());

        // response with vars
        $this->response->setView('displayUserInformation/index.php');
        $this->response->setVars(
            array(
                "name" => $userObject->getName(),
                "age" => $userObject->getAge(),
                "restaurant" => $userObject->getFavoriteResturant(),
                "food" => $userObject->getfavoriteFoodId()
            )
        );

        return $this->response;
    }
}
