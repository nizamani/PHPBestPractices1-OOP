<?php
namespace PHPBestPractices1OOP\Domain\Restaurant;

class Restaurant
{
    // region vars

    /**
     * @var int
     */
    private $restaurantId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $averagePrice;

    /**
     * @var string
     */
    private $style;

    // endregion

    // region set

    /**
     * @param int $restaurantId
     */
    public function setId($restaurantId)
    {
        $this->restaurantId = $restaurantId;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $averagePrice
     */
    public function setAveragePrice($averagePrice)
    {
        $this->averagePrice = $averagePrice;
    }

    /**
     * @param string $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    // endregion

    // region get

    /**
     * @return int
     */
    public function getId()
    {
        return $this->restaurantId;
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
    public function getAveragePrice()
    {
        return $this->averagePrice;
    }

    /**
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    // endregion
}
