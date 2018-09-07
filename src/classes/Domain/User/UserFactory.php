<?php
namespace PHPBestPractices1OOP\Domain\User;

use PHPBestPractices1OOP\Domain\UsersTransactions\UsersTransactions;
use PHPBestPractices1OOP\Domain\Restaurant\RestaurantFactory;
use PHPBestPractices1OOP\Domain\Food\FoodFactory;

class UserFactory
{
    /**
     * @var UsersTransactions
     */
    private $usersTransactions;

    /**
     * @var FoodFactory
     */
    private $foodFactory;

    /**
     * @var RestaurantFactory
     */
    private $restaurantFactory;

    /**
     * UserFactory constructor.
     * @param UsersTransactions $usersTransactions
     * @param FoodFactory $foodFactory
     * @param RestaurantFactory $restaurantFactory
     */
    public function __construct(
        UsersTransactions $usersTransactions,
        FoodFactory $foodFactory,
        RestaurantFactory $restaurantFactory
    ) {
        $this->usersTransactions = $usersTransactions;
        $this->foodFactory = $foodFactory;
        $this->restaurantFactory = $restaurantFactory;
    }

    /**
     * create an instance of User class
     *
     * @param int $userId
     * @return User
     */
    public function createUser($userId)
    {
        $userObject = new User();

        // get user data from the db and set to User object
        $userRow = $this->usersTransactions->getUserById($userId);
        $userObject->setName($userRow["userRow"]["name"]);
        $userObject->setAge($userRow["userRow"]["age"]);
        $userObject->setFavoriteRestaurantId($userRow["userRow"]["favoriteRestaurantId"]);
        $userObject->setFavoriteFoodId($userRow["userRow"]["favoriteFoodId"]);

        // create restaurant object and set user's favorite restaurant
        $restaurantObject = $this->restaurantFactory->createResturant($userObject->getFavoriteRestaurantId());
        $userObject->setFavoriteRestaurant($restaurantObject);

        // create food object and set user's favorite food
        $foodObject = $this->foodFactory->createFood($userObject->getFavoriteFoodId());
        $userObject->setFavoriteFood($foodObject);

        return $userObject;
    }
}
