<?php

$x = 30;

if ($x >= 30) {
    echo "the x is greater or equal 30<br>";
} else {
    echo "x is less than 30<br>";
}

$a = "shahin";

$val = match ($a) {
    'shahin' => 'dsf',
    default => 'nice'
};

echo $val;
?>