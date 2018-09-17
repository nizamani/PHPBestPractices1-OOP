<?php
namespace PHPBestPractices1OOP\Domain\User;

use PHPBestPractices1OOP\Domain\Food\Food;
use PHPBestPractices1OOP\Domain\Restaurant\Restaurant;

class User
{
    // region vars

    /**
     * @var int
     */
    private $userId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var Restaurant
     */
    private $favoriteRestaurant;

    /**
     * @var Food
     */
    private $favoriteFood;

    // endregion

    // region set

    /**
     * @param $userId
     */
    public function setId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param $favoriteRestaurant
     */
    public function setFavoriteRestaurant(Restaurant $favoriteRestaurant)
    {
        $this->favoriteRestaurant = $favoriteRestaurant;
    }

    /**
     * @param $favoriteFood
     */
    public function setFavoriteFood(Food $favoriteFood)
    {
        $this->favoriteFood = $favoriteFood;
    }

    // endregion

    // region get

    public function getId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return Restaurant
     */
    public function getFavoriteRestaurant()
    {
        return $this->favoriteRestaurant;
    }

    /**
     * @return string
     */
    public function getFavoriteRestaurantName()
    {
        return $this->favoriteRestaurant->getName();
    }

    /**
     * @return string
     */
    public function getFavoriteFoodName()
    {
        return $this->favoriteFood->getName();
    }

    /**
     * @return Food
     */
    public function getFavoriteFood()
    {
        return $this->favoriteFood;
    }

    // endregion
}
