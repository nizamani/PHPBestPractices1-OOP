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
     * @var int
     */
    private $favoriteRestaurantId = null;

    /**
     * @var int
     */
    private $favoriteFoodId = null;

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
     * @param int $favoriteRestaurantId
     */
    public function setfavoriteRestaurantId($favoriteRestaurantId)
    {
        $this->favoriteRestaurantId = $favoriteRestaurantId;
    }

    /**
     * @param int $favoriteFoodId
     */
    public function setfavoriteFoodId($favoriteFoodId)
    {
        $this->favoriteFoodId = $favoriteFoodId;
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
        return $this->favoriteRestaurantId;
    }

    /**
     * @return int
     */
    public function getfavoriteFoodId()
    {
        return $this->favoriteFoodId;
    }

    // endregion
}
