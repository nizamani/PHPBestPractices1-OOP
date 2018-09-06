<?php
namespace PHPBestPractices1OOP\Domain\Food;

class FoodFactory
{
    /**
     * create an instance of Food class
     *
     * @return Food
     */
    public static function createFood()
    {
        return new Food();
    }
}
