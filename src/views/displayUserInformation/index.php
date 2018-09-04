<?php
$viewVars = $this->getVars();

// display
echo "User's name is ".$viewVars["name"].", age is ".$viewVars["age"]."<br>";
echo "Favorite restaurant is ".$viewVars["restaurant"]." favorite food is ".$viewVars["food"];