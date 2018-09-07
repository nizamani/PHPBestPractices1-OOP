<?php
namespace PHPBestPractices1OOP\Domain\User;

use PHPBestPractices1OOP\Domain\Food\Food;
use PHPBestPractices1OOP\Domain\FoodsTransactions\FoodsTransactions;
use PHPBestPractices1OOP\Domain\RestaurantsTransactions\RestaurantsTransactions;
use PHPBestPractices1OOP\Domain\UsersTransactions\UsersTransactions;
use PHPBestPractices1OOP\Domain\Restaurant\RestaurantFactory;
use PHPBestPractices1OOP\Domain\Food\FoodFactory;

class UserFactory
{
    /**
     * create an instance of User class
     *
     * @param int $userId
     * @param UsersTransactions $usersTransactions
     * @param RestaurantsTransactions $restaurantsTransactions
     * @param FoodsTransactions $foodsTransactions
     * @return User
     */
    public static function createUser($userId, $usersTransactions, $restaurantsTransactions, $foodsTransactions)
    {
        $userObject = new User();

        // get user data from the db and set to User object
        $userRow = $usersTransactions->getUserById($userId);
        $userObject->setName($userRow["userRow"]["name"]);
        $userObject->setAge($userRow["userRow"]["age"]);
        $userObject->setFavoriteRestaurantId($userRow["userRow"]["favoriteRestaurantId"]);
        $userObject->setFavoriteFoodId($userRow["userRow"]["favoriteFoodId"]);

        // create restaurant object for user's favorite restaurant
        $restaurantObject = RestaurantFactory::createResturant(
            $userObject->getFavoriteRestaurantId(),
            $restaurantsTransactions
        );

        // create food object
        $foodObject = FoodFactory::createFood($userObject->getFavoriteFoodId(), $foodsTransactions);

        // set user favorite food and favorite restaurant objects
        $userObject->setFavoriteRestaurant($restaurantObject);
        $userObject->setFavoriteFood($foodObject);

        return $userObject;
    }
}
