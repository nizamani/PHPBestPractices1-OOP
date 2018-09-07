<?php
namespace PHPBestPractices1OOP\Domain\User;

use PHPBestPractices1OOP\Domain\Food\Food;
use PHPBestPractices1OOP\Domain\Restaurant\Restaurant;

class User
{
    // region vars

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var int
     */
    private $favoriteRestaurantId;

    /**
     * @var int
     */
    private $favoriteFoodId;

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
    public function setFavoriteRestaurant($favoriteRestaurant)
    {
        $this->favoriteRestaurant = $favoriteRestaurant;
    }

    /**
     * @param int $favoriteRestaurantId
     */
    public function setFavoriteRestaurantId($favoriteRestaurantId)
    {
        $this->favoriteRestaurantId = $favoriteRestaurantId;
    }

    /**
     * @param int $favoriteFoodId
     */
    public function setFavoriteFoodId($favoriteFoodId)
    {
        $this->favoriteFoodId = $favoriteFoodId;
    }

    /**
     * @param $favoriteFood
     */
    public function setFavoriteFood($favoriteFood)
    {
        $this->favoriteFood = $favoriteFood;
    }

    // endregion

    // region get

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
     * @return int
     */
    public function getFavoriteRestaurantId()
    {
        return $this->favoriteRestaurantId;
    }

    /**
     * @return string
     */
    public function getFavoriteRestaurantName()
    {
        return $this->favoriteRestaurant->getName();
    }

    /**
     * @return int
     */
    public function getFavoriteFoodId()
    {
        return $this->favoriteFoodId;
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
