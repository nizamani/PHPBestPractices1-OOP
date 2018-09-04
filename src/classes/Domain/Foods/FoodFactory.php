<?php
namespace PHPBestPractices1OOP\Domain\Foods;

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
