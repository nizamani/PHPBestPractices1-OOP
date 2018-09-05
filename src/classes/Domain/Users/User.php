<?php
namespace PHPBestPractices1OOP\Domain\Users;

class User
{
    // region vars

    /**
     * @var string
     */
    private $name = null;

    /**
     * @var int
     */
    private $age = null;

    /**
     * @var int
     */
    private $favoriteRestaurant = null;

    /**
     * @var int
     */
    private $favoriteFood = null;

    // endregion

    // region get

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
     * @param int $favoriteRestaurant
     */
    public function setFavoriteRestaurant($favoriteRestaurant)
    {
        $this->favoriteRestaurant = $favoriteRestaurant;
    }

    /**
     * @param int $favoriteFood
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
     * @return int
     */
    public function getFavoriteResturant()
    {
        return $this->favoriteRestaurant;
    }

    /**
     * @return int
     */
    public function getFavoriteFood()
    {
        return $this->favoriteFood;
    }

    // endregion
}
