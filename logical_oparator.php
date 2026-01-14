<?php

$a = false;

if (!$a) {
    echo "everything is a lie <br>";
}
;

$b = true;

$c = true;

if ($c xor $b) {
    echo "everything is not a lie <br>";
}

if ($c xor $a) {
    echo "well it will only echo when when one of the variable is false and other is true <br>";
}


$girl_age = 17;

if ($girl_age <= 17 && $girl_age >= 0) {
    echo "you a pedophile";
}

?>