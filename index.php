<?php
require_once("fakedatabase/db.php");
include_once("classes/Domain/Users/User.php");
include_once("classes/Domain/Users/UserFactory.php");
include_once("classes/Domain/Restaurants/Restaurant.php");
include_once("classes/Domain/Restaurants/RestaurantFactory.php");
include_once("classes/Domain/Foods/Food.php");
include_once("classes/Domain/Foods/FoodFactory.php");

use PhpOOProject\Domain\Users\UserFactory;
use PhpOOProject\Domain\Restaurants\RestaurantFactory;
use PhpOOProject\Domain\Foods\FoodFactory;

// dependencies
$userObject = UserFactory::createUser();
$restaurantObject = RestaurantFactory::createResturant();
$foodObject = FoodFactory::createFood();

// fetch variables from db.php
global $users;
global $resturants;
global $foods;

// set user values from db
$userObject->setName($users[0]["name"]);
$userObject->setAge($users[0]["age"]);

// get user's resturant and favorite food ids
$favoriteFoodId = $users[0]["favoriteFood"];
$favoriteResturantId = $users[0]["favoriteRestaurant"];

// set favorite resturant values to favorite resturant object
$restaurantObject->setName($resturants[$favoriteResturantId]["name"]);

// set favorite food values to food object
$foodObject->setName($foods[$favoriteFoodId]["name"]);

// set values to user using food and resturant objects
$userObject->setFavoriteRestaurant($restaurantObject->getName());
$userObject->setFavoriteFood($foodObject->getName());

// display
echo "User's name is ".$userObject->getName().", age is ".$userObject->getAge()."<br>";
echo "Favorite restaurant is ".$userObject->getFavoriteResturant()." favorite food is ".$userObject->getFavoriteFood();
