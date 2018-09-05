<?php
namespace PHPBestPractices1OOP\Domain\RestaurantsTransactions;

class RestaurantsTransactions
{
    /**
     * @var array
     */
    private $restaurants;

    /**
     * UsersTransactions constructor.
     * @param $restaurants
     */
    public function __construct($restaurants)
    {
        $this->restaurants = $restaurants;
    }

    /**
     * get restaurant row for restaurant id
     *
     * @param int $restaurantId
     * @return array
     */
    public function getRestaurantById($restaurantId)
    {
        // vars
        $return["success"] = false;

        // search restaurant by id
        $restaurantRowIndex = array_search($restaurantId, array_column($this->restaurants, "id"));

        // success in getting restaurant from array
        if ($restaurantRowIndex !== false) {
            $return["success"] = true;
            $return["restaurantRow"] = $this->restaurants[$restaurantRowIndex];
        }

        return $return;
    }
}
