<?php
namespace PHPBestPractices1OOP\Domain\Restaurant;

class RestaurantFactory
{
    /**
     * create an instance of Restaurant class
     *
     * @return Restaurant
     */
    public static function createResturant()
    {
        return new Restaurant();
    }
}
