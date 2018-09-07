<?php
namespace PHPBestPractices1OOP\Domain\Food;

use PHPBestPractices1OOP\Domain\FoodsTransactions\FoodsTransactions;

class FoodFactory
{
    /**
     * create an instance of Food class
     *
     * @param int $foodId
     * @param FoodsTransactions $foodsTransactions
     * @return Food
     */
    public static function createFood($foodId, $foodsTransactions)
    {
        $foodObject = new Food();

        // get food data from the db and set to food object
        $foodRow = $foodsTransactions->getFoodById($foodId);
        $foodObject->setName($foodRow["foodRow"]["name"]);

        return $foodObject;
    }
}
