<?php
$viewVars = $this->getVars();

// loop through user's display array and display user's information
foreach ($viewVars["userDisplayArray"] as $displayArray) {
    echo "User's name is " . $displayArray["name"] . ", age is " . $displayArray["age"] . "<br>";
    echo "Favorite restaurant is " . $displayArray["restaurant"] . " favorite food is " . $displayArray["food"];
    echo "<br><br>";
}
