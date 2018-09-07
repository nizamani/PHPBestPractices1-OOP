<?php
namespace PHPBestPractices1OOP\Domain\Food;

use PHPBestPractices1OOP\Domain\FoodsTransactions\FoodsTransactions;

class FoodFactory
{
    /**
     * @var FoodsTransactions
     */
    private $foodsTransactions;

    /**
     * FoodFactory constructor.
     * @param FoodsTransactions $foodsTransactions
     */
    public function __construct(FoodsTransactions  $foodsTransactions)
    {
        $this->foodsTransactions = $foodsTransactions;
    }

    /**
     * create an instance of Food class
     *
     * @param int $foodId
     * @return Food
     */
    public function createFood($foodId)
    {
        $foodObject = new Food();

        // get food data from the db and set to food object
        $foodRow = $this->foodsTransactions->getFoodById($foodId);
        $foodObject->setName($foodRow["foodRow"]["name"]);

        return $foodObject;
    }
}
