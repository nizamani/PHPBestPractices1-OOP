<?php
$viewVars = $this->getVars();

// error getting user from db, display error message
if ($viewVars["hasError"] === true) {
    echo "Error getting user for user id";

    // else successfull in getting user from database, display user's information
} else {
    echo "User's name is " . $viewVars["name"] . ", age is " . $viewVars["age"] . "<br>";
    echo "Favorite restaurant is " . $viewVars["restaurant"] . " favorite food is " . $viewVars["food"];
}
