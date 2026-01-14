<?php


for ($i = 0; $i < 10; $i++) {
    if ($i == 3) {
        goto abc;
    }
    echo $i . "<br>";
}

abc:
echo "goto executed";


?>