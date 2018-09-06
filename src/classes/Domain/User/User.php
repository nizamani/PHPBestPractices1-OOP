<?php
namespace PHPBestPractices1OOP\Domain\User;

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
     * @var string
     */
    private $favoriteRestaurantName = null;

    /**
     * @var string
     */
    private $favoriteFoodName = null;

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
     * @param string $favoriteRestaurantName
     */
    public function setfavoriteRestaurantName($favoriteRestaurantName)
    {
        $this->favoriteRestaurantName = $favoriteRestaurantName;
    }

    /**
     * @param string $favoriteFoodName
     */
    public function setfavoriteFoodName($favoriteFoodName)
    {
        $this->favoriteFoodName = $favoriteFoodName;
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
     * @return string
     */
    public function getFavoriteResturantName()
    {
        return $this->favoriteRestaurantName;
    }

    /**
     * @return string
     */
    public function getfavoriteFoodName()
    {
        return $this->favoriteFoodName;
    }

    // endregion
}
