<?php
namespace PHPBestPractices1OOP\Domain\Restaurant;

use PHPBestPractices1OOP\Domain\RestaurantsTransactions\RestaurantsTransactions;

class RestaurantFactory
{
    /**
     * @var RestaurantsTransactions
     */
    private $restaurantsTransactions;

    /**
     * RestaurantFactory constructor.
     * @param RestaurantsTransactions $restaurantsTransactions
     */
    public function __construct(RestaurantsTransactions $restaurantsTransactions)
    {
        $this->restaurantsTransactions = $restaurantsTransactions;
    }

    /**
     * create an instance of Restaurant class
     *
     * @param $restaurantId
     * @return Restaurant
     */
    public function createResturant($restaurantId)
    {
        $restaurantObject = new Restaurant();

        // get restaurant data from the db and set to restaurant object
        $restaurantRow = $this->restaurantsTransactions->getRestaurantById($restaurantId);
        $restaurantObject->setName($restaurantRow["restaurantRow"]["name"]);

        return $restaurantObject;
    }
}
