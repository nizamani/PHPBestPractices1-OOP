<?php
// this represents a sql table named `users`
$users = array(
    array("id" => 1, "name" => "Mike", "age" => 30, "favoriteRestaurantId" => 1, "favoriteFoodId" => 1),
    array("id" => 2, "name" => "Jenn", "age" => 28, "favoriteRestaurantId" => 3, "favoriteFoodId" => 3),
    array("id" => 3, "name" => "John", "age" => 31, "favoriteRestaurantId" => 2, "favoriteFoodId" => 1),
    array("id" => 4, "name" => "Shehzad", "age" => 30, "favoriteRestaurantId" => 1, "favoriteFoodId" => 1),
    array("id" => 5, "name" => "Paul", "age" => 25, "favoriteRestaurantId" => 2, "favoriteFoodId" => 2)
);

// this represents a sql table named `restaurants`
$resturants = array(
   array("id" => 1, "name" => "McDonalds", "averagePrice" => 1, "style" => "American"),
   array("id" => 2, "name" => "Taco Bell", "averagePrice" => 1, "style" => "Mexican"),
   array("id" => 3, "name" => "KFC", "averagePrice" => 2, "style" => "American")
);

// this represents a sql table named `foods`
$foods = array(
    array("id" => 1, "name" => "French Fries", "caloriesPerOunce" => "100"),
    array("id" => 2, "name" => "Hamburger", "caloriesPerOunce" => "135"),
    array("id" => 3, "name" => "Fried Chicken", "caloriesPerOunce" => "97")
);
