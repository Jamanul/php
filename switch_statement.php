<?php
$age = 118.1;

switch ($age) {
    case ($age <= 18 && $age >= 10):
        echo "you are something";
        break;
    case ($age <= 30 && $age > 18):
        echo "you are not something ";
        break;
    default:
        echo "whats up nigga";


}

?>