<?php
error_reporting(E_ALL);
require_once("fakedatabase/db.php");
require_once("config/autoloader.php");

use PhpOOProject\Domain\Users\UserFactory;
use PhpOOProject\Domain\Restaurants\RestaurantFactory;
use PhpOOProject\Domain\Foods\FoodFactory;

// dependencies
$userObject = UserFactory::createUser();
$restaurantObject = RestaurantFactory::createResturant();
$foodObject = FoodFactory::createFood();

// set user values from db
$userRowNumber = 1;
$userObject->setName($users[$userRowNumber]["name"]);
$userObject->setAge($users[$userRowNumber]["age"]);

// get user's resturant and favorite food ids
$favoriteFoodRowNumber = array_search($users[$userRowNumber]["favoriteFood"], array_column($foods, "id"));
$favoriteResturantRowNumber = array_search(
    $users[$userRowNumber]["favoriteRestaurant"],
    array_column($resturants, "id")
);

// get favorite restaurant and favorite food ids

// set favorite resturant values to favorite resturant object
$restaurantObject->setName($resturants[$favoriteResturantRowNumber]["name"]);

// set favorite food values to food object
$foodObject->setName($foods[$favoriteFoodRowNumber]["name"]);

// set values to user using food and resturant objects
$userObject->setFavoriteRestaurant($restaurantObject->getName());
$userObject->setFavoriteFood($foodObject->getName());

// display
echo "User's name is ".$userObject->getName().", age is ".$userObject->getAge()."<br>";
echo "Favorite restaurant is ".$userObject->getFavoriteResturant()." favorite food is ".$userObject->getFavoriteFood();
