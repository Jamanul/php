<?php

$marks = 39.9;

if ($marks <= 100 && $marks >= 80) {
    echo "you are in first division";
} elseif ($marks < 80 && $marks >= 60) {
    echo "you are in second division";
} elseif ($marks < 60 && $marks >= 40) {
    echo "you are in third division";
} elseif ($marks < 40) {
    echo "you have failed";

} else {
    echo 'please enter a valid no';
}


if ($marks <= 100 && $marks >= 80):
    echo "you are in first division";
elseif ($marks < 80 && $marks >= 60):
    echo "you are in second division";
elseif ($marks < 60 && $marks >= 40):
    echo "you are in third division";
elseif ($marks < 40):
    echo "you have failed";

else:
    echo 'please enter a valid no';
endif;




?>