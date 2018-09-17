<?php
namespace PHPBestPractices1OOP\Domain\Food;

class Food
{
    // region vars

    /**
     * @var int
     */
    private $foodId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $caloriesPerOunce;

    // endregion

    // region set

    /**
     * @param int $foodId
     */
    public function setId($foodId)
    {
        $this->foodId = $foodId;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $caloriesPerOunce
     */
    public function setCaloriesPerOunce($caloriesPerOunce)
    {
        $this->caloriesPerOunce = $caloriesPerOunce;
    }

    // endregion

    // region get

    /**
     * @return int
     */
    public function getId()
    {
        return $this->foodId;
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
    public function getCaloriesPerOunce()
    {
        return $this->caloriesPerOunce;
    }

    // endregion
}
