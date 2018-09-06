<?php
namespace PHPBestPractices1OOP\Domain\User;

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
    public function getFavoriteResturantId()
    {
        return $this->favoriteRestaurantId;
    }

    /**
     * @return int
     */
    public function getFavoriteFoodId()
    {
        return $this->favoriteFoodId;
    }

    // endregion
}
