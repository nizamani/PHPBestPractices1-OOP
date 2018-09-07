<?php
namespace PHPBestPractices1OOP\Domain\Restaurant;

use PHPBestPractices1OOP\Domain\RestaurantsTransactions\RestaurantsTransactions;

class RestaurantFactory
{
    /**
     * create an instance of Restaurant class
     *
     * @param $restaurantId
     * @param RestaurantsTransactions $restaurantsTransactions
     * @return Restaurant
     */
    public static function createResturant($restaurantId, $restaurantsTransactions)
    {
        $restaurantObject = new Restaurant();

        // get restaurant data from the db and set to restaurant object
        $restaurantRow = $restaurantsTransactions->getRestaurantById($restaurantId);
        $restaurantObject->setName($restaurantRow["restaurantRow"]["name"]);

        return $restaurantObject;
    }
}
