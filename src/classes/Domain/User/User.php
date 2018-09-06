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
    public function setFavoriteRestaurantId($favoriteRestaurantId)
    {
        $this->favoriteRestaurantId = $favoriteRestaurantId;
    }

    /**
     * @param string $favoriteRestaurantName
     */
    public function setfavoriteRestaurantName($favoriteRestaurantName)
    {
        $this->favoriteRestaurantName = $favoriteRestaurantName;
    }

    /**
     * @param int $favoriteFoodId
     */
    public function setFavoriteFoodId($favoriteFoodId)
    {
        $this->favoriteFoodId = $favoriteFoodId;
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
     * @return int
     */
    public function getFavoriteResturantId()
    {
        return $this->favoriteRestaurantId;
    }

    /**
     * @return string
     */
    public function getFavoriteResturantName()
    {
        return $this->favoriteRestaurantName;
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
    public function getfavoriteFoodName()
    {
        return $this->favoriteFoodName;
    }

    // endregion
}
