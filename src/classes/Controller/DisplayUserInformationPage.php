<?php
namespace PHPBestPractices1OOP\Controller;

use PHPBestPractices1OOP\Domain\FoodsTransactions\FoodsTransactions;
use PHPBestPractices1OOP\Domain\RestaurantsTransactions\RestaurantsTransactions;
use PHPBestPractices1OOP\Domain\UsersTransactions\UsersTransactions;
use PHPBestPractices1OOP\Request\Request;
use PHPBestPractices1OOP\Response\Response;
use PHPBestPractices1OOP\Domain\Users\UserFactory;
use PHPBestPractices1OOP\Domain\Restaurants\RestaurantFactory;
use PHPBestPractices1OOP\Domain\Foods\FoodFactory;

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
        $userRow = $this->usersTransactions->getUserById(2);

        // success in getting user's row from db, set user's properties for display
        if ($userRow["success"] === true) {
            $hasError = false;

            // get user's resturant and favorite food ids
            $userFavoriteRestaurantRow =
                $this->restaurantsTransactions->getRestaurantById($userRow["userRow"]["favoriteFood"]);
            $userFavoriteFoodRow = $this->foodsTransactions->getFoodById($userRow["userRow"]["favoriteRestaurant"]);

            $userObject->setName($userRow["userRow"]["name"]);
            $userObject->setAge($userRow["userRow"]["age"]);

            // success in getting favorite restaurant, set favorite restaurant namme to favorite resturant object
            if ($userFavoriteRestaurantRow["success"] === true) {
                $restaurantObject->setName($userFavoriteRestaurantRow["restaurantRow"]["name"]);
            }

            // success in getting favorite food, set favorite food values to food object
            if ($userFavoriteFoodRow["success"] === true) {
                $foodObject->setName($userFavoriteFoodRow["foodRow"]["name"]);
            }

            // set values to user using food and resturant objects
            $userObject->setFavoriteRestaurant($restaurantObject->getName());
            $userObject->setFavoriteFood($foodObject->getName());

            // else problem getting user from db
        } else {
            $hasError = true;
        }

        // response with vars
        $this->response->setView('displayUserInformation/index.php');
        $this->response->setVars(
            array(
                "name" => $userObject->getName(),
                "age" => $userObject->getAge(),
                "restaurant" => $userObject->getFavoriteResturant(),
                "food" => $userObject->getFavoriteFood(),
                "hasError" => $hasError
            )
        );

        return $this->response;
    }
}
